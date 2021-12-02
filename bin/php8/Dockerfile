FROM php:8.0.10-apache-buster
 
# Install xdebug
RUN pecl install xdebug-3.0.0 && \
    docker-php-ext-enable xdebug

# Enable apache modules
RUN a2enmod rewrite headers
