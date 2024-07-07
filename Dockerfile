# Usar la imagen oficial de PHP
FROM php:7.4-apache

# Instalar extensiones PHP necesarias
RUN docker-php-ext-install mysqli

# Copiar archivos de configuración de Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf
