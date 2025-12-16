FROM php:8.2-apache

# Instalar extensões PHP necessárias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql mysqli zip \
    && rm -rf /var/lib/apt/lists/*

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Permitir .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Copiar o código da pasta atual para o container
COPY . /var/www/html

# Permissões corretas
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expor porta HTTP
EXPOSE 80

CMD ["apache2-foreground"]
