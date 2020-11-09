FROM alpine

RUN apk update && apk upgrade
RUN apk add wget openssl nginx openrc supervisor\
    php7 php7-fpm php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session openssh &&\ 
    wget https://wordpress.org/latest.zip && unzip latest.zip && mv wordpress /www/ && rm latest.zip

RUN mkdir -p /run/nginx

COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY supervisor.conf /etc/supervisord.conf
COPY wp-config.php /www/
COPY install.sh start.sh
# COPY wordpress.sql ./var/www/your_domain/
RUN chmod u+x start.sh

EXPOSE 5050
ENTRYPOINT [ "sh", "start.sh" ]