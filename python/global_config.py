web_root="/www/wwwroot"
code_source=web_root+"/bo.8.fortex.com"


global_config = {
    "php_path":"/usr/bin/php",
    "target_dirs":[
        web_root+'/bo6_93',
        web_root+'/bo6_77',
        web_root+'/bo6_185'
        # web_root+'/bo6_82',
    ]
}

def get(key):
    global global_config
    if key in global_config:
        return global_config[key]
    else:
        return False
#end if



