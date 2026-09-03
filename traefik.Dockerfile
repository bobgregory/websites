FROM traefik:latest

COPY ./traefik/traefik.yaml /etc/traefik/traefik.yaml
COPY ./traefik/middlewares.dynamic.yaml /etc/traefik/middlewares.dynamic.yaml
COPY ./traefik/websites.traefik.dynamic.yaml /etc/traefik/websites.traefik.dynamic.yaml
