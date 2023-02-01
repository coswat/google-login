## google-login
 simple google login and register using laravel
 if you find any issue's or bugs you can let me know
## Usage <br>
Setup the repository <br>
```
git clone https://github.com/coswat/google-login.git
cd google-login
composer install
cp .env.example .env 
php artisan key:generate
php artisan cache:clear && php artisan config:clear 
php artisan serve 
```

## Database Setup <br>
```
mysql;
create database laravel-todol;
exit;
```


### Setup your database credentials in the ```.env``` file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-todo
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```
### Setup your Google  Credentials in the ```.env``` file <br>
```
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET_ID=
```
### Socialite
Before you can use Laravel Socialite , you obviously need to make sure that you install it through Composer. Besides that, you should publish the socialite configuration file as well.
```
composer require laravel/socialite

```
### Setup your Google  Credentials in the ```.services.php``` file <br>
'google' => [ 'client_id' => env('GOOGLE_CLIENT_ID'), 'client_secret' => env('GOOGLE_CLIENT_SECRET_ID'), 'redirect' => 'http://127.0.0.1:8085/auth/callback/google', ],
```

### Migrate tables
```
php artisan migrate
```
