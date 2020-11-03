#!/bin/bash

echo "$1"

if [ $1 = "start" ];
then
    minikube start --driver=virtualbox
fi

if [ $1 = "delete" ];
then
    # kubectl delete -f srcs/metal
    kubectl delete -f srcs/yaml
    # kubectl delete secret mysqlpassword
    minikube delete
fi
if [ $1 = "clean" ];
then
    # kubectl delete -f srcs/nginx
    kubectl delete -f srcs/yaml
    # kubectl delete secret mysqlpassword
fi
if [ $1 = "restart" ];
then
    minikube delete
    minikube start --driver=virtualbox
fi

minikube addons enable metallb

eval $(minikube docker-env)

docker build -t nginx_my srcs/nginx

kubectl apply -f srcs/yaml/ngnix.yaml

kubectl apply -f ./srcs/yaml/metallb.yaml


