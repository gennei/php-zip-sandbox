# php-zip-sandbox
php で zip を扱う

# example

## host
```
$ make build
$ make exec
```

## in docker
```
root@32d7e55201d0:/var/www/html# php ./src/main.php
php!
zip success
root@32d7e55201d0:/var/www/html# ls -l /tmp/
total 4
-rw-r--r-- 1 root root 114 Jul 17 08:50 hoge.zip
```
