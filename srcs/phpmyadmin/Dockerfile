FROM alpine:latest

RUN apk update
RUN apk upgrade
RUN apk add openssh
RUN apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli \
                    php7-zlib php7-curl php7-mbstring php7-json php7-session \
                    openrc nginx php-fpm openssl wget supervisor

RUN adduser -D -g 'www' www
RUN mkdir /www && chown -R www:www /var/lib/nginx && chown -R www:www /www && mkdir -p /run/nginx

WORKDIR /www
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=RF/ST=MSK/L=SCH/O=21/CN=hmiso' -keyout /etc/ssl/certs/nginx.key -out /etc/ssl/certs/nginx.crt


COPY nginx.conf /etc/nginx/conf.d/default.conf
RUN mkdir -p /usr/share/webapps/ && cd /usr/share/webapps
RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN tar zxvf phpMyAdmin-5.0.2-all-languages.tar.gz
RUN rm phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages phpmyadmin
COPY supervisor.conf /etc/supervisord.conf
COPY config.inc.php phpmyadmin/config.inc.php
COPY start.sh .
RUN chmod 644 phpmyadmin/config.inc.php

CMD ["sh", "start.sh"]

EXPOSE 5000
