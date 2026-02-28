FROM traefik:latest

COPY ./traefik/traefik.toml /etc/traefik/traefik.toml
COPY ./traefik/traefik.dynamic.toml /etc/traefik/traefik.dynamic.toml