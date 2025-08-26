# Use PHP with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy frontend and backend into Apache web root
COPY frontend/ /var/www/html/
COPY backend/ /var/www/html/backend/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
CMD ["apache2-foreground"]
