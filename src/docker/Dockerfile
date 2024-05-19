# Dockerfile
FROM php:7.4-apache

# Install pdo and pdo_mysql extensions
RUN docker-php-ext-install pdo pdo_mysql

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Keep the container running
CMD ["apache2-foreground"]
