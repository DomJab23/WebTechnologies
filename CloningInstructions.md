After cloning the repository run these commands in terminal

mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate