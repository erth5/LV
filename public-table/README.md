### default
php artisan make:controller CustomersController --model=Customer
php artisan make:controller TableController --model=Table

## NameConvention:
https://www.javaer101.com/de/article/225665034.html

### public
php artisan make:controller PublicTController --model=PublicT
php artisan make:migration create_public_t_table

#### Fake Data
php artisan make:factory PublicTFactory --model=PublicT
php artisan make:seeder PublicTSeeder
php artisan db:seed

### info
Illuminate is the namespace laravel choose to put their code in. The word Illuminate means to light-up something. By using laravel you are illuminating PHP developement experience in their terms, hence the name.

just a namespace.


### troubleshooting
php artisan cache:clear
