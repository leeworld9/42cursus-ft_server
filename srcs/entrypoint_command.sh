#!/bin/bash

tar -xvf phpMyAdmin.tar
tar -xvf wordpress.tar

mv /root/wordpress /var/www/html/
chown www-data.www-data /var/www/html/wordpress/* -R

mv /root/phpMyAdmin /var/www/html/
mkdir /var/www/html/phpMyAdmin/tmp
chown www-data.www-data /var/www/html/phpMyAdmin/* -R

mv /root/setting/index.php /var/www/html/index.php
mv /root/setting/default /etc/nginx/sites-available/default
service mysql start
service mysql status
mysql -u root -e "source /root/setting/init.sql"

cd /root/ssl
chmod +x ./mkcert
./mkcert -install
./mkcert localhost
cd ..

rm -rf /root/setting /root/entrypoint_command.sh

service php7.3-fpm start
service php7.3-fpm status
service nginx start
service nginx status

## 33 line : Code to use the container continuously Because it ends when the entrypoint is executed
## How to use the terminal
## 1. ctrl+p -> ctrl+q
## 2. docker exec -it [CONTAINER ID] /bin/bash
tail -f /var/log/nginx/access.log /var/log/nginx/error.log