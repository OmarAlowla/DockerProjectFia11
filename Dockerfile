# Use the official PHP image as a base image
FROM php:7.4-fpm

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy the project files into the container
COPY . /var/www/

# Set the working directory
WORKDIR /var/www/
