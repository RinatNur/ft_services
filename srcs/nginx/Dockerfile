FROM alpine

RUN apk update && apk upgrade
RUN apk add nginx openssl openrc openssh supervisor

RUN adduser -D -g 'www' www
RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www
COPY ./srcs/index.html /www/


RUN mkdir -p run/nginx
COPY ./srcs/nginx.conf /etc/nginx/
COPY ./srcs/start.sh .
COPY ./srcs/supervisor.conf /etc/supervisord.conf
RUN chmod +rw /etc/supervisord.conf
RUN printf "root\nroot\n" | adduser jheat
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=RF/ST=MSK/L=SCH/O=21/CN=jheat' -keyout /etc/ssl/certs/nginx.key -out /etc/ssl/certs/nginx.crt
RUN chmod +x start.sh

EXPOSE 80 443 22
CMD sh start.sh
