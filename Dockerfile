FROM wordpress:latest

# Install additional PHP extensions if needed
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable mod_rewrite for pretty permalinks
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy custom PHP configuration if needed
# COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Set permissions
RUN chown -R www-data:www-data /var/www/html
