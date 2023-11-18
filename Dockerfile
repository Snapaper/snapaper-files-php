FROM trafex/php-nginx

COPY . /var/www/html/
COPY ./vhost.conf /etc/nginx/conf.d/default.conf
