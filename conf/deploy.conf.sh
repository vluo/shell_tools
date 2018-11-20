#!/bin/bash

WEBROOT="/www/wwwroot"
VHOST_CONFIG_ROOT="/www/server/panel/vhost/apache"      #vhost config file dir
APACHE_CONFIG="/www/server/apache/conf/httpd.conf"
SOURCE="$WEBROOT/bo.8.fortex.com"                                #souce code dir
SOURCE_PORT="80"                                        #apache port of source code
CONFIG_FILE="bo.8.fortex.com.conf"                            #vhost config file
RESTART_COMMAND="/etc/init.d/httpd restart"


SQL_FILE="/www/tools/conf/BO6_clear.sql"
DB_USER="root"
DB_PASSWORD="fortex"