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
create database laravel-google-login;
exit;
```


### Setup your database credentials in the ```.env``` file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-google-login
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
### Setup your Google  Credentials in the ```/config/services.php``` file <br>
```php
'google' => [ 'client_id' => env('GOOGLE_CLIENT_ID'), 'client_secret' => env('GOOGLE_CLIENT_SECRET_ID'), 'redirect' => 'http://127.0.0.1:8085/auth/callback/google', ],
```

### Migrate tables
```
php artisan migrate
```
<p align="center"><a href="https://github.com/coswat/google-login#coswat"><img src="http://randojs.com/images/barsSmallTransparentBackground.gif" alt="Animated footer bars" width="100%"/></a></p>
<br/>
<p align="center"><a href="https://github.com/coswat/google-login#"><img src="http://randojs.com/images/backToTopButtonTransparentBackground.png" alt="Back to top" height="29"/></a></p>
