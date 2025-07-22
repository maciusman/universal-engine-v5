# Dockerfile
FROM wordpress:latest
RUN apt-get update && apt-get install -y sudo git
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
USER www-data
WORKDIR /var/www/html
EXPOSE 80