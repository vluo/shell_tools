#!/bin/bash


basepath=$(cd `dirname $0`; pwd)

. $basepath/conf/deploy.conf.sh
. $basepath/create_db.sh

checkDir(){
   #return 1
   #echo $WEBROOT
   dir="$WEBROOT/bo6_$1"
   #echo $dir
   if [ $# -eq 2 ] && [ $2 == '1' ];then
      echo "remove dir $dir"
      rm -rf $dir
   fi

   if [ -d "$dir" ]; then
      echo "$1 has bean used"
      return 0 #emkdir $dir  #echo "$dir fiund";
   else 
      echo "create new dir '$dir'" 
      mkdir $dir  #echo "$dir found";i
      echo "from $SOURCE to $dir"
      cp -R ${SOURCE}/* $dir
      chown -R www $dir
      chmod -R 777 $dir

      echo "copy source code done"
      return 1
   fi
}

addConfigFile(){
   if [ -f $NGINX_CONFIG_FILE ];then
      newConfigFile=$(getNewConfigFile $1)
      #newConfigFile=$$CONFIG_ROOT/bo6_$1.conf"
      dir=$WEBROOT/bo6_$1
      #dir=$(dir/\//\\\/)
      #sourceDir=$(SOURCE/\//\\\/)
      echo "port=$1"
      cp $VHOST_CONFIG_ROOT"/"$CONFIG_FILE $newConfigFile
      echo "from $CONFIG_FILE to $newConfigFile"
      sed -i "s/:$SOURCE_PORT/:$1/g" $newConfigFile
      sed -i "s#\"$SOURCE\"#\"$dir\"#g" $newConfigFile
      sed -i "s/log\"/[$1].log\"/g" $newConfigFile
      #sed -i "s/access_log/$1.access.log/g" $newConfigFile
      echo "copy server config file done"
      return 1
      #echo "">new.conf
      #echo $content>>new.conf
   else
      echo "server config file not found"
      return 0
   fi
}

getNewConfigFile(){
   echo $VHOST_CONFIG_ROOT/bo6_$1.conf
}

addListenPort(){
   #line="grep \<Listen $1 $APACHE_CONFIG"
   #echo $line
   grep ^Listen\ $1 $APACHE_CONFIG
   #$line
   if [ $? == '0' ];then
      echo "did not add port"
   else
      echo "Listen $1">>$APACHE_CONFIG
      echo $APACHE_CONFIG
   fi
}

reloadNginx(){
    addListenPort $1
    echo "try to restart server"
    lines=`$RESTART_COMMAND`
    echo $lines	
}





if [ $1 ];then
   #port=${{1}}
   #if [ $port -gt 100 || $port -lt 80  ];then
   #   echo "port num should between 80-100"
   #   return
   #fi
   addListenPort $1
   #exit 1
   #checkDir $1
   if [ $# -eq 2 ];then
      force=$2
   else
      force="0"
   fi
   checkDir $1 $force
   #echo "res=$?"
   if [ $? == 1 ];then
      addConfigFile $1
      #echo "res=$?"
      if [ $? == 1 ];then
         reloadNginx
         confirm "New BO6 has bean created successully, would you like to create a database fo it?" "addDBCallback"
      else
         newConfigFile=$(getConfigFile $1)
         #newConfigFile=$?  #"$NGINX_CONFIG_ROOT/192.1.2.8:$1.conf"
         if [ -f $newConfigFile ];then
            rm -f $newConfigFile
         fi
         echo "try to remove $newConfigFile"
      fi
   else
      echo 'failed'
   fi
else
   echo "faile: please input port number"
fi
