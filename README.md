# Usage

Start docker image normally.

```sh
docker run -p 10000:80 -dit sig9/lb-test-web-servers
```

Specify node name (`LB_NODE`) and color (`LB_COLOR`).

```sh
docker run -p 10000:80 -e LB_COLOR=green -e LB_NODE=Web-01 -dit sig9/lb-test-web-servers
```

# How to start multiple servers

## Docker-Compose

```sh
docker-compose up -d
```

## Shell Script

```sh
for port in $(seq 1 100); do docker run -p `expr $port + 10000`:80 -e LB_NODE=Web-$port --name Web-$port -dit sig9/lb-test-web-servers; done
```

