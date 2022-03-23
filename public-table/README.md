## NameConvention:

https://www.javaer101.com/de/article/225665034.html

# Setup (see parent README)
1. install required programs
2. run composer and npm commands
3. create database named: connect
4. migrate, start mix and start serve


## info

Illuminate is the namespace laravel choose to put their code in. The word Illuminate means to light-up something. By
using laravel you are illuminating PHP developement experience in their terms, hence the name. just a namespace.

Löscht alle anderen Datenbanken

````shell
php artisan migrate --path=/database/migrations/migration-name.php
````
s muss angehangen werden, da bei der Suche nach der Datenbank ein s angehangen wird

## Database
````shell
php artisan db:wipe
php artisan db:seed
````
### public
````shell
php artisan make:controller PublicTController --model=PublicT
php artisan make:migration create_public_t_s_table
php artisan make:factory PublicTFactory --model=PublicT
php artisan make:seeder PublicTSeeder
````
### chain
````shell
php artisan make:controller ChainTController --model=ChainT
php artisan make:migration create_chain_t_s_table
php artisan make:factory ChainTFactory --model=ChainT
php artisan make:seeder ChainTSeeder
````
### calendar
````shell
php artisan make:controller CalendarTController --model=CalendarT
php artisan make:migration create_calendar_t_s_table
php artisan make:factory CalendarTFactory --model=CalendarT
php artisan make:seeder CalendarTSeeder
````
### difference
````shell
php artisan make:controller DifferentTController --model=DifferentT
php artisan make:migration create_different_t_s_table
php artisan make:factory DifferentTFactory --model=DifferentT
php artisan make:seeder DifferentTSeeder
````
