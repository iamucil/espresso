# Lumen api

Set permission for lumen storage, run this comman inside php container.
```
docker exec -i -t CONTAINER_NAME sh
HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | awk '{ print $2}' | uniq | tail -1`
chgrp -R ${HTTPDUSER} storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache
```

## MySQL

```
CREATE USER 'api'@'%' IDENTIFIED BY 'wwGwx4P9HhCCGXVV';
CREATE USER 'api'@'localhost' IDENTIFIED BY 'wwGwx4P9HhCCGXVV';
CREATE DATABASE IF NOT EXISTS api;
grant all privileges on api.* to 'api'@'localhost';
grant all privileges on api.* to 'api'@'%';
flush privileges;
```
