# Pigly
## Dockerビルド

1.git@github.com:Miki-y8/mogitate.git

2.DockerDesktopアプリを立ち上げる

3.docker-compose up -d --build

## Laravel環境構築

1.docker-compose exec php bash

2.composer install

3.「.env」ファイルを作成

### .envに以下の環境変数を追加

DB_CONNECTION=mysql

DB_HOST=mysql

DB_PORT=3306

DB_DATABASE=laravel_db

DB_USERNAME=laravel_user

DB_PASSWORD=laravel_pass

## アプリケーションキーの作成

php artisan key:generate

## マイグレーションの実行

php artisan migrate

## シーディングの実行

php artisan db:seed

## 使用技術(実行環境)

PHP8.3.0

Laravel8.83.27

MySQL8.0.26

## ER図

<img width="801" alt="スクリーンショット 2025-04-07 0 05 14" src="https://github.com/user-attachments/assets/655f0a02-5c73-4f2c-9c03-5124a36addca" />



## URL
開発環境：http://localhost/
phpMyAdmin:：http://localhost:8080/

