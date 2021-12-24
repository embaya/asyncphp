FROM php:8.0.0-cli-alpine

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer

COPY . /usr/src/asyncphp
WORKDIR /usr/src/asyncphp
RUN composer install
CMD [ "composer", "booking-create" ]
