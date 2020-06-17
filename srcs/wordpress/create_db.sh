service nginx start
service mysql start
mysql -u root < ./var/www/localhost/wordpress/create_db.sql
mysql -u root < ./var/www/localhost/phpmyadmin/sql/create_tables.sql