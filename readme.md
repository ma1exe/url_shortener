# Сокращатель ссылок на Laravel
Код создан при помощи PHP 7.1, Laravel 5.8.

### Установка
1. `git clone https://github.com/ma1exe/url_shortener.git`
2. `cd url_shortener`
3. `composer install`
4. `cp .env.example .env`
5. `php artisan key:generate`
6. Настройте файл `.env`, а именно: `APP_URL`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, и `DB_PASSWORD`.
7. `php artisan migrate`
8. В качестве корневого каталога веб-сервера укажите папку `public`.
9. Запустите веб-сервер.

### Протестировано в бразуерах
* Google Chrome 80.0.3987.122
* Mozilla Firefox 73.0.1 
* Internet Explorer 11.1039.17763.0