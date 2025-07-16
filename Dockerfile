FROM php:8.1

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    zip \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql zip mbstring

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia el proyecto al contenedor
COPY . /var/www
WORKDIR /var/www

# Instala dependencias PHP (Laravel)
RUN composer install --optimize-autoloader --no-dev

# Expone el puerto usado por artisan serve
EXPOSE 10000

CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "10000"]
