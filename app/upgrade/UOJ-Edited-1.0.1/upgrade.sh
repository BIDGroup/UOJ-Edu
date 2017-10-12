#!/bin/bash

if [ $1 = "up" ]
    then
        mkdir -p /var/www/uoj/files/upload
        chmod 777 /var/www/uoj/files/upload
elif [ $1 = "down" ]
    then
        rm -rf /var/www/uoj/files/upload
fi
