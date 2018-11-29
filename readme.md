# Standard konfigurationer til symfony

En række standardkonfigurationer af webserver Apache og Nginx der anvender php-fpm

## Projekt Symfony4 (bookstore) 
Eksemplet, der anvender Dockuer Hub imaget php:7.2-apache, hvor Apache og PHP befinder sig i samme image og Symfony/apache-pack opretter .htaccess fil i public mappen.

## Mappen apache/http
Et eksempel med mine images httpd:bbr og php_fpm:bbr

## Initiering af Symfony
* Kør projektet i apache/http med `docker-compose up`
* gå til sf4php containeren `docker exec -it -u dev sf4php bash`
* opret symfony projektet
```
cd /var/www/html
composer create-project symfony/website-skeleton .
```
**Husk det afsluttende punktum ovenfor**

Apache og php-fpm lytter på port 9000

## mappen apache/socket
Et eksempel med anvendelse af httpd:bbr og php_fpm:bbr

Det fungerer med unix:/run/php/php7.2-fpm.sock

## Mappen nginx
Et eksempel med anvendelse af httpd:bbr og php_fpm:bbr

Nginx og php-fpm anvender unix:/run/php/php7.2-fpm.sock

## Mappen nginx-http
Et eksempel med anvendelse af httpd:bbr og php_fpm:bbr

Nginx og php-fpm listen = php:9000

**Det er vigtigt at der referers til docker-compose service php i**

- default.conf
- zz-docker.conf
