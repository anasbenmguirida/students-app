# Use the official PHP image as the base image
FROM php:8.1-fpm

# Set the working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the existing application directory contents
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy the existing application directory permissions
COPY . .

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
