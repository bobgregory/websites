FROM traefik:latest

COPY ./traefik/traefik.yaml /etc/traefik/traefik.yaml
COPY ./traefik/dynamic /etc/traefik/dynamic