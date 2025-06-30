FROM nginx:latest

COPY ./snippets /etc/nginx/snippets/

COPY ./configs /etc/nginx/conf.d/

RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data

COPY ./websites /var/www/

#CMD ["nginx", "-g", "--with-http_sub_module;"]
