FROM  httpd:2.4.35

ADD development/vhost.conf /etc/apache/conf.d/default.conf

COPY public /var/www/public
