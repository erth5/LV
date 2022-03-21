# lv
Free Laravel Projects

## prepare (linux)
### composer

````shell
sudo apt install php libapache2-mod-php php-mbstring php-xmlrpc php-soap php-gd php-xml php-cli php-zip
````

````shell
composer.phar update

php composer.phar update

composer C:/ProgramData/ComposerSetup/bin/composer.phar update

php composer C:/ProgramData/ComposerSetup/bin/composer.phar update
````
### node.js by nvm
````shell
sudo apt update
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.38.0/install.sh | bash

or

wget -q0- https://raw.githubusercontent.com/nvm-sh/nvm/v0.38.0/install.sh | bash
````

````shell
source ~/.bashrc
nvm --version
nvm ls-remote
nvm install [version.number]
````

````shell
composer update
````

### create lv project
````shell
composer global require laravel/installer
laravel new <projectName>

or

composer create-project laravel/laravel <projectName>
````

````shell
cd <projectName>
php artisan --version 
php artisan serve
````

## prepare (windows)

1. install windows-sub-system "commandline" by install docker
2. install xampp for PHP and DB
3. optional install laragon for DB

````shell
composer update
````

### create project
````shell
composer create-project laravel/laravel <projectName>
````

# check Installation
````shell
composer -v
php -v
laravel --version
php artisan --version
````

### start only server
````shell
php artisan serve
````
## helpers
clear cache
````shell - sometimes when web.php has a vault, the routing stops
php artisan route:cache
php artisan cache:clear

````
optimize class
````shell
optimize php artisan
````
regenerate vendor folder
````shell
composer update
````
## setup npm
````shell
npm init
npm update
````

## Frontend
Integrated
- Laravel Mix uses Webpack

Other
- Grunt
- Gulp
- Jetbrain file-watcher

packages for Jetbrain file-watcher
````shell
npm install -g sass
npm install -g typescript
npm install typescript --save-dev
````

# start frontend
run webpack and npm
````shell
npm run dev
````
run server
````shell
php artisan serve
````

## DB reset:
del all tables, migrate and seed
````shell
php artisan migrate:fresh --seed
````

# Info
tsconfig.json can configure for all projects, is sorted in one for one

# Known Problems
Unknown:
league/mime-type-detection
ignore by:
composer update --ignore-platform-req=ext-fileinfo


## Mehrfachbelegungen freigegeben
````
A angular
B bootstrap breeze
C ~~calendar~~ cashier
D ~~diffrent+-~~ dusk
E envoyer
F frontend forge
G gulp
H hy horizon
I
J jetstream
K
L
M media 9.4.1
N nova
O ori-to_update
P public_table
Q
R react
S s_apps (sail spark scout socialite sanctum)
T template (TS SASS) -> mix telescope
U
V vue vapier valet
W (tail)wind (can use by jetstream)
X Y Z
````
base version: 9.1.0


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
