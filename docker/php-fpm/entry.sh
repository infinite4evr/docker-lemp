#!/bin/sh

# start cron
/usr/sbin/crond -f -l 8 </dev/null &>/dev/null &

php-fpm