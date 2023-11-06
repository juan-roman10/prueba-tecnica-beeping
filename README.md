# Challenge Beeping

This project is developed with Laravel Sail and Docker.

#### Configuring A Bash Alias

By default, Sail commands are invoked using the vendor/bin/sail script that is included with all new Laravel applications:

`./vendor/bin/sail up`

However, instead of repeatedly typing vendor/bin/sail to execute Sail commands, you may wish to configure a Bash alias that allows you to execute Sail's commands more easily:

`alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'`

Once the Bash alias has been configured, you may execute Sail commands by simply typing sail.

##### Installing Composer Dependencies When You Clone Project

None of the application's Composer dependencies, including Sail, will be installed after you clone the application's repository to your local computer. This command uses a small Docker container containing PHP and Composer to install the application's dependencies:

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php74-composer:latest \
    composer install --ignore-platform-reqs
```

-   Start server `sail up -d`
-   Install npm dependencies `sail npm install`
-   Install composer dependencies `sail composer install`
-   Configure your `.env` file

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=prueba_tecnica_beeping
DB_USERNAME=sail
DB_PASSWORD=password

QUEUE_CONNECTION=database
```

### Sail

-   Server start `sail up -d`
-   Server stop `sail down`
-   Server rebuild `sail build --no-cache`

All commands replace `php` with `sail`.
Example: `sail artisan migrate` instead of `php artisan migrate`
