Requisitos:
-php
-composer

Si se clona el repo seguir los siguentes pasos:
-git clone laravel_api
-cd laravel_api

(se necesita composer para instalar dependencias)
-composer install

-cp .env.example .env
-touch database/database.sqlite

-php artisan key:generate
-php artisan migrate:fresh --seed

-php artisan serve
