#!/bin/bash

#. ./conf/deploy.conf.sh

confirm(){
    while true;do
        echo -n "$1: "
        read arg
        $2 $arg
        if [ $? -eq 1 ];then
           break
        fi
    done
}

addDBCallback(){
    typeset -l arg
    arg=$1
    if [ "$arg" == "y" ] || [ "$arg" == "yes" ];then
        confirm "Please input a database name" "createData"
    elif [ "$arg" != "no" ] && [ "$arg" != 'n' ];then
        return 0        
    fi

    return 1
}


createData(){
    echo "input = $1"
    if [ "$1" == "" ];then
        return 0
    fi
    
    if [ -f $SQL_FILE ];then
        temp_sql_file=$SQL_FILE".temp.sql"
        cp $SQL_FILE $temp_sql_file
        sed -i "s/FT_DB_NAME/$1/g" $temp_sql_file
	#echo 'done'
        mysql -u$DB_USER -p$DB_PASSWORD<$SQL_FILE.temp.sql
        #echo $command
        #$command
        echo 'done'
    else
        echo "sql_file NOT FOUND"
    fi
    return 1
}


#confirm "New BO6 has bean created successfully, would you like to create a database fo it?" "addDBCallback"

