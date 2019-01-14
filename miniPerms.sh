### Podstawwe uprawnienia dla serwisu www-php
find . -type d -print0 | xargs -0 chown m:www-data
find . -type f -print0 | xargs -0 chown m:www-data
find . -type d -print0 | xargs -0 chmod 750
find . -type f -print0 | xargs -0 chmod 640
find . -type f -name '*.sh' -print0 | xargs -0 chmod 500
chmod 770 log
chmod 770 tmp
find ./log/ -type f | grep './log/[^\.].*' | xargs rm
find ./tmp/ -type f | grep './tmp/[^\.].*' | xargs rm

