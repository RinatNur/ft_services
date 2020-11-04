FROM alpine:latest

RUN apk update upgrade	
RUN	apk add nginx openssl openssh

COPY ./srcs/nginx_localhost /etc/nginx/conf.d/default.conf

RUN mkdir /etc/nginx/ssl	
RUN	openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/your_domain.key\
	-out /etc/nginx/ssl/my.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=21school/OU=jheat/CN=localhost"


COPY ./srcs/start.sh ./
RUN chmod +x ./start.sh
RUN mkdir -p /run/nginx

EXPOSE 80 443
ENTRYPOINT [ "sh", "/start.sh" ]