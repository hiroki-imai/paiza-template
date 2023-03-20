FROM php:8.0-apache-bullseye
# パッケージリスト更新後にパッケージをインストール
RUN apt-get update && apt-get install -y git zip unzip
COPY . /var/www/html
# composerのインストール
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /data
