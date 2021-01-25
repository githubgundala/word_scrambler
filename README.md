# Game Word scrambler

###### Cara Install
1. Clone project
2. Jalankan preintah > composer install
3. Rename file .env.example menjadi .env kemudian jalankan printah php artisan key:generate
4. Setting file env seperti berikut :
*APP_NAME="GAME SCRAMBLER"
*APP_ENV=local
*APP_URL=http://127.0.0.1:8000

*DB_CONNECTION=mysql
*DB_HOST=127.0.0.1
*DB_PORT=3306
*DB_DATABASE=game
*DB_USERNAME=(sesuaikan dengan setting anda)
*DB_PASSWORD=(sesuaikan dengan setting anda)

5. Buatlah table dengan nama > game
6. Jalan kan perintah > php artisan migrate
7. Untuk membuat akun admin maka jalankan perintah > php artisan db:seed 
8. Jalankan perintah > php artisan serve
10.Untuk membuka admin page ketikan url > http://127.0.0.1:8000\dashboard
11. Untuk admin username = admin@amdin.com, password = admin123456789
