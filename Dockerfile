# Simple dockerfile for a small php web server.
#
# Run with: docker run -it -p=80:80 --rm --name my-running-app <IMAGE NAME>

# Use the offical php-apache web server image
FROM php:5.6-apache

# Copy our app into the default dir for apache
COPY . /var/www/html/


