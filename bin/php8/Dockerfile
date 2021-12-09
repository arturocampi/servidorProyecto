FROM php:8.0.10-apache-buster
 
# Install xdebug
RUN pecl install xdebug-3.0.0 && \
    docker-php-ext-enable xdebug

# Enable apache modules
RUN a2enmod rewrite headers

# Other PHP8 Extensions
RUN docker-php-ext-install pdo pdo_mysql

# Cleanup
RUN rm -rf /usr/src/*