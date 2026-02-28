FROM nginx:latest

COPY ./webserver/snippets /etc/nginx/snippets/
COPY ./webserver/fastcgi.conf /etc/nginx/
COPY ./webserver/nginx.conf /etc/nginx/
COPY ./webserver/certs /certs/
#RUN rm /etc/nginx/sites-enabled/*
COPY ./webserver/sites /etc/nginx/sites-enabled
#COPY ./nginx.conf /etc/nginx/conf.d

RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data

#RUN rm /etc/nginx/conf.d/default.conf

COPY ./webserver/websites /var/www/

#CMD ["nginx", "-g", "--with-http_sub_module;"]
