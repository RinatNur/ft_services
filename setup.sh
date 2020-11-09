minikube start --driver=virtualbox --memory='3000' --disk-size 5000MB;
minikube addons enable metallb;
minikube addons enable dashboard;
eval $(minikube docker-env);
kubectl apply -f srcs/yaml/metallb.yaml;
docker build -t nginx:latest srcs/nginx/;
docker build -t mysql:latest srcs/mysql/;
docker build -t phpmyadmin:latest srcs/phpmyadmin/;
# docker build -t wordpress:latest srcs/wordpress/;
kubectl apply -f srcs/yaml/mysql.yaml
kubectl apply -f srcs/yaml/nginx.yaml
kubectl apply -f srcs/yaml/phpmyadmin.yaml
# kubectl apply -f srcs/yaml/wordpress.yaml

minikube dashboard;