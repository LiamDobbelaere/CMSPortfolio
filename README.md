# CMS portfolio Tom Dobbelaere

## How to install
1. `vagrant up` in this directory.
2. Create `.env` file in the `portfolio` directory. You can find an example below.
3. Cd to the `portfolio` directory and run `php artisan key:generate`
4. Run `php artisan migrate`
5. Connect to the database and use the sql-dump to fill in some dummy data.
6. If you want to create/edit/delete posts, you have to log in using tom.dobbelaere@outlook.com with the password secret.

Note: Registering was disabled as to provide only admin access. Therefore there's only one account to login with.

## .env file example

```
    APP_NAME=Laravel
    APP_ENV=
    APP_KEY=
    APP_DEBUG=
    APP_LOG_LEVEL=
    APP_URL=
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=blog
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    
    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    SESSION_DRIVER=file
    SESSION_LIFETIME=120
    QUEUE_DRIVER=sync
    
    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379
    
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp-mail.outlook.com
    MAIL_PORT=587
    MAIL_USERNAME=
    MAIL_PASSWORD=
    MAIL_ENCRYPTION=tls
    
    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=

```
