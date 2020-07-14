# Standard konfigurationer til symfony

En række standardkonfigurationer af webserver Apache og Nginx der anvender php-fpm

Demo appen blev i marts 2020 genskabt. Det er en ny app som anvender en sqlite database.

Det aktuelle projekt i mappen web er en demo udgave

    composer create-project symfony/symfony-demo:1.4.4. web
    
enable Apache http serverens adgang til at skrive i Symfony loggen::

```
export HTTPDUSER=www-data
sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX var
sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX var
```

På Manjaro skal det være 
```
export HTTPDUSER=http
```

## Mappen apache/http

Et eksempel med mine images httpd:bbr og php_fpm:bbr fra projektet https://github.com/brundtoe/docker_standard

Apache og php-fpm lytter på port 9000

## mappen apache/socket

Et eksempel med anvendelse af httpd:bbr og php_fpm:bbr

Det fungerer med unix:/run/php/php7.4-fpm.sock

## Mappen nginx

Et eksempel med anvendelse af httpd:bbr og php_fpm:bbr

Nginx og php-fpm anvender unix:/run/php/php7.4-fpm.sock

## Mappen nginx-http

Et eksempel med anvendelse af httpd:bbr og php_fpm:bbr

Nginx og php-fpm listen = php:9000

**Det er vigtigt at der referers til docker-compose service php i**

- default.conf
- zz-docker.conf
