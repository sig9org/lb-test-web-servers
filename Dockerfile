FROM alpine:3.5
RUN apk --no-cache add apache2 php7-apache2 \
 && mkdir -p /run/apache2/ \
 && rm -f /var/www/localhost/htdocs/index.html \
 && sed -i 's/    DirectoryIndex index.html/    DirectoryIndex index.php/g' /etc/apache2/httpd.conf
COPY files/index.php /var/www/localhost/htdocs/index.php
ENV LB_NODE=Web
ENV LB_COLOR=red
EXPOSE 80
ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]
