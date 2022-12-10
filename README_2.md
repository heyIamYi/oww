複製一份.env.example  名字取為.env

修改env設定

新增storage/framework/cache/data（有的話就略過）
storage/app/public新增manager資料夾（有的話就略過）
--
打指令
composer update
--
php artisan cache:clear
--
php artisan storage:link
--
composer dump-autoload
--
php artisan key:generate 
---

本機部署（本機才開放777）
chmod -R 777 storage
chmod -R 777 bootstrap/cache

server部署(別用777)
chown -R apache:apache *
chmod -R 755 storage
chmod -R 755 bootstrap/cache



匯入sql

如果env有調整記得執行


