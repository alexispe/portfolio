#!/bin/sh
set -e

#attempt_left=20
#
#until php artisan migrate:status | grep -q 'Connection refused' >/dev/null 2>&1;
#do
#    attempt_left=$((attempt_left-1))
#    if [ "${attempt_left}" -eq "0" ]; then
#          (>&2 echo "MySQL did not answer. Aborting migrations.")
#          exit 1
#    else
#          (>&2 echo "Waiting for MySQL to be ready...")
#    fi
#
#    sleep 1
#done

sleep 5
php artisan migrate --no-interaction --force
php artisan storage:link

exec "$@"
