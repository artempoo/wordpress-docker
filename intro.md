# wordpress 
вставляем весь wordpress в папку wordpress кроме wp-config.php
wp-config.php должен остаться из репозитория, в нем прописаны доступы

wordpress
	- index.php
	- wp-config.php
	- и т.д.

# mysql 
копируем базу данных в папку mysql и называем init.sql
предварительно необходимо изменить доменное имя на localhost

Чтобы изменить доменное имя в бд можно воспользоваться командой linux sed

```shell
sed -i '' 's/domainname\.com/localhost/g' init.sql
```


# собираем  контейнер docker

### запуск сборки
```shell
sudo docker compose up -d
```

### сброс контейнера
```shell
sudo docker compose down -v
```

### чистка 
```shell
sudo docker system prune -a
```

### ребилд игнорируя кеш
```
docker compose build --no-cache php
```

### смотреть логи
```shell
docker logs wp-db
docker logs wp-php
docker logs wp-nginx
```



# после сборки (сменить доступ к админу)
если собирали с базой в которой есть админ, необходимо сбросить его пароль по скольку хеши не совпадают, в админку не пустит.

через WP-CLI

```shell
docker exec -it wp-php wp user update admin --user_pass=admin123
```

# Доступ к phpmyadmin
http://localhost:8080
Server : db
Username : wordpress
Password : wordpress
