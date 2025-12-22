FROM php:8.2-apache

RUN a2enmod rewrite

# Garante que o .htaccess funcione corretamente
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf