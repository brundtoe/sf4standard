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


