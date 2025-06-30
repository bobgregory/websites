FROM nginx:latest

COPY ./snippets /etc/nginx/snippets/
COPY ./fastcgi.conf /etc/nginx/
#RUN rm /etc/nginx/sites-enabled/*
COPY ./sites /etc/nginx/sites-enabled
#COPY ./nginx.conf /etc/nginx/conf.d

RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data

#RUN rm /etc/nginx/conf.d/default.conf

COPY ./websites /var/www/

#CMD ["nginx", "-g", "--with-http_sub_module;"]
