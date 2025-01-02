<h1>お問い合わせフォーム</h1><br />
<h2>開発環境</h2>
Dockerビルド<br /><br />
 1.git@github.com:taichi-uemura931/contact-form-test.git<br />
 2.docker-compose up -d -build
<br />
<br />
※MySQLは、OSによって起動しない可能性があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください
<br /><br />
Laravel環境構築
<br /><br />
 1. docker-compose exec php bash<br />
 2. composer install<br />
 3..env.exampleファイルから.envを作成し、環境変数を変更<br />
 4. php artisan key:generate<br />
 5. php artisan migrate<br />
 6. php artisan db:seed<br /><br />
 <h2>使用技術</h2>
 • PHP 8.0<br />
 • Laravel 10.0<br />
 • MySQL 8.0<br /><br />
 <h2>URL</h2>
 • 開発環境: http://localhost/ <br />
 • phpMyAdmin: http://localhost:8080/ <br />

