# Nginx + PHP 5.6 Docker Container

## Introduction
This is a Docker container that has an Ngnix server running PHP 5.6. This container is inspired from [ngineered/nginx-php-fpm](https://github.com/ngineered/nginx-php-fpm), but with simplicity in mind. 

## Building the container
````
./build.sh
````

## Running the container 
Once you have built the container, you can launch it like so:
````
docker run -d -P janorman/nginx-php-fpm:latest
````

## Running the container with your own source
All web accessible files live within `/home/app/web` within the container. To add your own files, it's simply a matter of mounting your directories in.
````
docker run -d -P -v /path/to/source:/home/app/web janorman/nginx-php-fpm:latest
````
