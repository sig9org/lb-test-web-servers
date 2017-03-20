# Usage

```sh
docker run -p 8080:80 -dit sig9/lb-test-web-servers
```

```sh
docker run -p 8080:80 -e LB_COLOR=green -e LB_NODE=Web-01 -dit sig9/lb-test-web-servers
```

