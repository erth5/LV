## NameConvention:
https://www.javaer101.com/de/article/225665034.html
## info
Illuminate is the namespace laravel choose to put their code in. The word Illuminate means to light-up something. By using laravel you are illuminating PHP developement experience in their terms, hence the name.
just a namespace.
## troubleshooting
php artisan cache:clear

## Database
php artisan db:seed
### public
php artisan make:controller PublicTController --model=PublicT
php artisan make:migration create_public_t_s_table

php artisan make:factory PublicTFactory --model=PublicT
php artisan make:seeder PublicTSeeder
### chain
php artisan make:controller ChainTController --model=ChainT
php artisan make:migration create_chain_t_s_table

php artisan make:factory ChainTFactory --model=ChainT
php artisan make:seeder ChainTSeeder
### calendar
php artisan make:controller CalendarTController --model=CalendarT
php artisan make:migration create_Calendar_t_s_table

php artisan make:factory CalendarTFactory --model=CalendarT
php artisan make:seeder CalendarTSeeder

