FROM php:5.6-apache

ADD config/php.ini /usr/local/etc/php/

ADD src/ /var/www/html/

EXPOSE 80:80
