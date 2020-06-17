#FROM permet de définir notre image de base, vous pouvez l'utiliser seulement une fois dans un Dockerfile
FROM	debian:buster

#PACKAGES
RUN	apt-get update \
        && apt-get upgrade -y \
        && apt-get install vim -y \
        && apt-get install nginx -y \
        && apt-get install mariadb-server mariadb-client -y \
        && apt-get install php-fpm php-mysql php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip -y

#PHP & OTHERS
RUN     mkdir /var/www/localhost
COPY    srcs/default /etc/nginx/sites-available/localhost
RUN     ln -s  /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/
COPY    srcs/index.html /var/www/localhost
COPY    srcs/index_on_off ./index_on_off

#PHPMYADMIN
COPY    srcs/phpmyadmin /var/www/localhost/phpmyadmin

#SSL
COPY    srcs/root/ /
RUN     /mkcert-v1.1.2-linux-amd64 -install \
        && /mkcert-v1.1.2-linux-amd64 localhost

#WORDPRESS
COPY    srcs/wordpress /var/www/localhost/wordpress
RUN     chown -R www-data:www-data /var/www/localhost/* \
        && chmod 775 /var/www/localhost/* \
        &&sh /var/www/localhost/wordpress/create_db.sh

CMD     service nginx start && service mysql start && service php7.3-fpm start && bash