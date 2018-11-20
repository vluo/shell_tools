import os, stat, sys, shutil
import re
import subprocess
import json
import time
import operator
import global_config


class crmDeloyer:
    orgWebRoot = ''
    targetWebRoot = ''
    message = []
    ignore_configuration_keys = ['web_root', 'dbconfig', 'site_url', 'ft_deploy']
    highlight = False
    syncDirs = ['custom/Extension', 'custom/modules', 'custom/themes', 'custom/include', 'modules']
    fileMode = stat.S_IRWXU
    updatedFileCounter = 0

    def __init__(obj, source, destination, highlight):
        obj.__fileModeCheck(source, destination)
        obj.orgWebRoot = source
        obj.targetWebRoot = destination
        obj.highlight = highlight
    #end def

    def __fileModeCheck(self, source, destination):
        accessible = True
        if not os.path.exists(source) or not os.path.exists(destination):
            print(source+' or '+destination+' is not found')
            accessible = False
        #end if
        if not os.access(destination, os.W_OK):
            print(destination + ' is not writable')
            accessible = False
        # end if
        if not os.access(source, os.R_OK):
            print(source + ' is not writable')
            accessible = False
        # end if
        if not accessible:
            sys.exit()
    #end def


    def __runPHP(obj, cript):
        proc = subprocess.Popen(cript, shell=True, stdout=subprocess.PIPE)
        response = proc.stdout.read()
        return response.decode('utf-8')
    #end def

    #private    function
    def __overwriteConfigurationFile(obj, file, array):
        if os.path.exists(file):
            try:
                fileName = file+'_'+str(time.time())+'.bak'
                shutil.copyfile(file, fileName)
                obj.message.append(file+" backup as "+fileName)
            except e:
                obj.message.append(file+" backup failed")
            obj.__writeArrayToFile2('sugar_config', array, file)
        else:
             obj.message.append(file+" not found")
    #end def

    #cur dir
    def __scriptPath(obj):
        return os.path.split(os.path.realpath(__file__))[0]
     #end def

    #php tool file
    def __phpScript(obj):
        scriptPath = obj.__scriptPath()
        return scriptPath + '/include.php'
    #end def

    def __writeArrayToFile2(obj, param, array, file):
        keyChains = obj.__keyChains(array)

        script = "<?php \r\n\r\n"
        for keyChain in keyChains:
            keys = keyChain.split('|')
            arrayVal = obj.__arrayVal(array,keys)
            if not isinstance(arrayVal, str):
                arrayVal = str(arrayVal)
            else:
                arrayVal = "'"+arrayVal+"'"
            script = script+'$'+param+"['"+("']['".join(keys))+"']="+arrayVal+";\n"
        #end for

        with open(file, 'w', encoding='utf-8') as file:
            try:
                file.write(str(script))
                return True
            except IOError:
                obj.message.append(obj.__highlightMessage(IOError))
                obj.message.append(obj.__highlightMessage('update '+file+' failed'))
                return False
        #end with
    #end def

    def __arrayVal(obj, array, keys):
        key = 0;
        val = None
        while key < len(keys):
            array = array[keys[key]] if isinstance(array,dict) else array[int(keys[key])]
            key = key+1
        return array
    #end def

    def __keyChains(obj, array):
        chains = [];
        for key in array:
            #chain = key
            if isinstance(array, dict):
                curVal = array[key]
            elif isinstance(array, list):
                curVal = key
                key = array.index(key)
            else:
                curVal = key

            if isinstance(curVal, dict) or isinstance(curVal, list):
                subChains = obj.__keyChains(curVal)
                for chain in subChains:
                    chain = str(key) + "|" + str(chain)
                    chains.append(chain)
            else:
                chains.append(key)
            #end if
        #end for
        return chains
    #end def

    def __loadConfigArray(obj, file):
        configFile = file
        if not os.path.exists(configFile):
            print(configFile + ' not found')
            sys.exit()
        # end if
        scriptPath = obj.__scriptPath();
        phpScript = global_config.get('php_path')+" -r \"include '" + configFile + "';include '" + scriptPath + "/include.php';\""
        obj.message.append(phpScript)
        jsonStr = obj.__runPHP(phpScript)
        try:
            return json.loads(jsonStr)
        except json.decoder.JSONDecodeError:
        	obj.message.append(jsonStr)
        	obj.message.append('try to decode '+file+' failed')

        return False
    #end def

    def __mergeConfigurationArray(obj, currentConfig, targetConfig):
        #for key in obj.ignore_configuration_keys:
        #    obj.message.append(key+" should be updataed manually")
        #end for
        targetConfig = obj.__updateItem(currentConfig, targetConfig)
        targetConfig = obj.__removeItem(currentConfig, targetConfig)
    #end def

    #private    function
    def __updateItem(obj, currentConfig, targetConfig):
        if isinstance(currentConfig, dict):
            for key in list(currentConfig.keys()):
                if key in obj.ignore_configuration_keys:
                    continue
                if key not in targetConfig:
                    if isinstance(targetConfig, dict):
                        obj.message.append('append ' + key + ' in targetConfig ')
                        targetConfig[key] = currentConfig[key]
                    else:
                        obj.message.append(obj.__highlightMessage(key + ' SHOULE BE UPDATE manually '))
                else:
                    if isinstance(currentConfig[key], dict):
                        targetConfig[key] = obj.__updateItem(currentConfig[key], targetConfig[key])
                    else:
                        if isinstance(currentConfig[key], list):
                            if len(currentConfig[key]) != len(targetConfig[key]):
                                obj.message.append(obj.__highlightMessage(key + ' SHOULE BE UPDATE manually '))
                            else:
                                for index in range(len(currentConfig[key])):
                                    if isinstance(currentConfig[key][index], dict):
                                        targetConfig[key][index] = obj.__updateItem(currentConfig[key][index], targetConfig[key][index])
                                    #end if
                                #end for
                            #end else
                            #end for
                        #end for
                        elif not operator.eq(currentConfig[key], targetConfig[key]):
                            obj.message.append(obj.__highlightMessage(key + ' SHOULE BE UPDATE manually '))
                        #end else
                #end if
            #end for
        #end if
        return targetConfig
    #END DEF

    #private    function
    def __removeItem(obj, currentConfig, targetConfig):
        if isinstance(targetConfig, dict):
            targetKeys = targetConfig.keys()
            for key in list(targetKeys):
                if key in obj.ignore_configuration_keys:
                    continue
                if key not in currentConfig:
                    obj.message.append('remove ' + key + ' in targetConfig ')
                    del targetConfig[key]
                elif isinstance(targetConfig[key], dict):
                    targetConfig[key] = obj.__removeItem(currentConfig[key], targetConfig[key])
                #end if
            #end for
        #end if
        return targetConfig
    #END DEF

    def __highlightMessage(obj, message):
        if obj.highlight:
            message = '<span class="tip_info">'+message+'</span>'
        #end if
        return message
    #end def

    def __copyDir(obj, sourceDir, targetDir):
        if not os.path.exists(sourceDir):
            obj.message.append(sourceDir+' not found')
            return False;
        # end if
        if not os.path.exists(targetDir):
            os.makedirs(targetDir)
            os.chmod(targetDir, obj.fileMode)
        # end if
        for file in os.listdir(sourceDir):
            sourceFilePath = os.path.join(sourceDir, file)
            targetFilePath = os.path.join(targetDir, file)
            #if sourceFilePath.find('index.php') !=-1: #=='/www/wwwroot/bo6_81/index.php':
            #    obj.message.append('skip file '+sourceFilePath+'//'+str(os.path.getmtime(sourceFilePath))+'//'+str(os.path.getmtime(targetFilePath)))
            if os.path.isfile(sourceFilePath):
                if not os.path.isfile(targetFilePath) or not operator.eq(os.path.getmtime(sourceFilePath), os.path.getmtime(targetFilePath)):
                    #print(os.access(targetFilePath, os.W_OK))
                    #sys.exit()
                    if os.path.isfile(targetFilePath) and not os.access(targetFilePath, os.W_OK):
                        obj.message.append(obj.__highlightMessage(targetFilePath+' is not writeable'))
                        continue
                    #END IF
                    try:
                        des = shutil.copy2(sourceFilePath, targetFilePath)
                        if not des:
                            obj.message.append('   update file ' + targetFilePath + ' failed')
                        else:
                            obj.message.append('   update file ' + targetFilePath + ' done')
                            obj.updatedFileCounter = obj.updatedFileCounter + 1
                            #    os.chmod(targetFilePath, obj.fileMode)
                            #   obj.message.append('update file ' + targetFilePath+' done')
                    except IOError:
                        obj.message.append(obj.__highlightMessage('copy file '+targetFilePath+' failed'))
                        return False
                    # end try block
                else:
                   pass# obj.message.append('skip file '+targetFilePath+'//'+str(os.path.getmtime(sourceFilePath))+'//'+str(os.path.getmtime(targetFilePath)))
            else:
                obj.__copyDir(os.path.join(sourceDir, sourceFilePath), os.path.join(targetDir, targetFilePath))
            # end else
        #end for
        return True
    #end def

    def __loadFtModules(obj):
        if 'modules' in obj.syncDirs:
            del obj.syncDirs[obj.syncDirs.index('modules')]
        #endif
        moduleRoot = os.path.join(obj.orgWebRoot, 'modules')
        for dir in os.listdir(moduleRoot):
            if not os.path.isfile(dir) and (re.match(r'a01_.*', dir) or re.match(r'bo_.*', dir) or re.match(r'rp_.*', dir)):
                obj.syncDirs.append(os.path.join(moduleRoot, dir))
            #end if
        #end for
    #end def

    #customize method
    def syncCode2(obj):
        #return True
        obj.__loadFtModules()
        for dir in obj.syncDirs:
            sourceDir = os.path.join(obj.orgWebRoot, dir)
            targetDir = os.path.join(obj.targetWebRoot, dir)
            #obj.message.append('copy ' + sourceDir + ' --> ' + targetDir)
            obj.__copyDir(sourceDir, targetDir)
        #end for
        return True
    #end def

    #system method
    def syncCode(obj):
        if not os.path.exists(obj.orgWebRoot):
            obj.message.append(obj.__highlightMessage("source path not defined"))
            return False

        for dir in obj.syncDirs:
            targetDir = obj.targetWebRoot+'/'+dir
            sourceDir = obj.orgWebRoot+'/'+dir
            if os.path.exists(targetDir):
                shutil.rmtree(targetDir)
            try:
                shutil.copytree(sourceDir, targetDir)
                obj.message.append("copy " + targetDir + " to " + sourceDir + " done")
                #return True
            except (IOError, os.error) as why:
                obj.message.append("copy " + targetDir + " to " + sourceDir + " failed")

        return True
    #end def

    def syncConfiguration(obj):
        currentConfigOverride = obj.__loadConfigArray(obj.orgWebRoot+'/config_override.php'); #$sugar_config;
        currentConfig = obj.__loadConfigArray(obj.orgWebRoot+'/config.php'); #// $sugar_config;

        if not currentConfig:
            obj.message.append(obj.__highlightMessage('load '+obj.orgWebRoot+'/config.php' + " failed"))
            return False
        #END IF
        if not currentConfigOverride:
            obj.message.append(obj.__highlightMessage('load '+obj.orgWebRoot+'/config_override.php' + " failed"))
            return False
        #END IF

        targetConfig = obj.__loadConfigArray(obj.targetWebRoot+'/config.php')   #; // $sugar_config;
        targetConfigOverride = obj.__loadConfigArray(obj.targetWebRoot+'/config_override.php')  #; // $sugar_config;

        if not targetConfig:
            obj.message.append(obj.__highlightMessage('load '+obj.targetWebRoot+'/config.php failed'))
            return False
        #END IF
        if not targetConfigOverride:
            obj.message.append(obj.__highlightMessage('load ' + obj.targetWebRoot + '/config_override.php failed'))
            return False
        #END IF

        orgTargetConfig = targetConfig.copy()
        orgTargetConfigOverride = targetConfigOverride.copy()

        obj.__mergeConfigurationArray(currentConfig, targetConfig)
        obj.__mergeConfigurationArray(currentConfigOverride, targetConfigOverride)

        if operator.eq(json.dumps(orgTargetConfig), json.dumps(targetConfig)):
            obj.message.append(obj.__highlightMessage(obj.targetWebRoot+'/config.php file has no change'))
        else:
            obj.__overwriteConfigurationFile(obj.targetWebRoot+'/config.php', targetConfig)
            obj.message.append(obj.__highlightMessage(obj.targetWebRoot+'/config.php file is rewritten'))
        #end if

        if operator.eq(json.dumps(orgTargetConfigOverride), json.dumps(targetConfigOverride)):
            obj.message.append(obj.__highlightMessage(obj.targetWebRoot+'/config_override.php file has no change'))
        else:
            obj.__overwriteConfigurationFile(obj.targetWebRoot+'/config_override.php', targetConfigOverride)
            obj.message.append(obj.__highlightMessage(obj.targetWebRoot+'/config_override.php file is rewritten'))
        #end if

        return True
    #end def

    def deploy(obj):
        startTime = time.time()
        if obj.syncCode2():
            obj.message.append(obj.__highlightMessage("updated : " + str(obj.updatedFileCounter)+" files"))
            obj.syncConfiguration()
        #end fi

        obj.message.append("cost :" + str(time.time()-startTime))
    #end def

#end class

'''
try:
    opts, argvs = getopt.getopt(os.argv[1:], 'f:t:h')
except getopt.GetoptError:
    print('usage: -f <fromSource> -t <toSource> [-h <highlight>]')
    sys.exit()
'''

argvs = sys.argv[1:]
if len(argvs) < 2:
    pass
    #print("param error")
    #sys.exit()
else:
    source = argvs[0].replace('\\', '/')
    destination = argvs[1].replace('\\', '/')
    if len(argvs) == 3 and operator.eq(argvs[2], 1) == 0:
        highlight = True
    else:
        highlight = False

#end else
highlight = False
dirs = global_config.get("target_dirs")
for dir in dirs:
    print("from "+global_config.code_source+" to "+dir)
    deployer = crmDeloyer(global_config.code_source, dir, highlight)
    deployer.deploy()   
#
#deployer = crmDeloyer(global_config.target_dirs, destination, highlight)
#deployer.deploy()

if highlight:
    print("<br>".join(deployer.message))
else:
	print("\r\n".join(deployer.message))
#print("done", "")
