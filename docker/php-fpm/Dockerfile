FROM php:fpm-alpine3.15

RUN apk add --update libzip-dev curl-dev &&\
    apk del gcc g++ &&\
    rm -rf /var/cache/apk/*

RUN curl --silent --show-error https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer


RUN docker-php-ext-install mysqli curl && docker-php-ext-enable mysqli

COPY ./php-config/overrides.ini /usr/local/etc/php/conf.d/overrides.ini


RUN apk update && apk add tzdata
ENV TZ=Asia/Kolkata

ADD crontab.txt /crontab.txt
COPY entry.sh /entry.sh
RUN chmod 755 /entry.sh
RUN /usr/bin/crontab /crontab.txt

CMD ["/entry.sh"]