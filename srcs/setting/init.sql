source /var/www/html/phpMyAdmin/sql/create_tables.sql;

CREATE USER 'db_admin'@'localhost' IDENTIFIED BY 'db_passwd';
GRANT ALL PRIVILEGES on *.* to 'db_admin'@'localhost';

CREATE DATABASE wp_db;
CREATE USER 'wp_admin'@'localhost' IDENTIFIED BY 'wp_passwd';
GRANT ALL PRIVILEGES ON wp_db.* TO 'wp_admin'@'localhost';

FLUSH PRIVILEGES;