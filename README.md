# lv
Free Laravel Projects

# EN
## Steps to make this Projects Useable
All projects are stored in the subfolders of the first level.

### PHP-Extension
Some Projects need php extensions. To activate PHP-Extensions, create a php.ini in your PHP-Interpreter.
##### Example Path:
#### C:\xampp\php\php.ini

include or add 
````md
extension=fileinfo
````

## Prepair Linux
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
### optional node.js by nvm 
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

## prepare project (windows)

1. download php, Recommended: xampp for PHP and DB
https://www.php.net/manual/de/install.windows.tools.php

2. set Path: Systemeinstellungen -> erweiterte Systemeinstellungen -> Erweitert -> Umgebungsvariablen, Recommended: set path by install composer

3. install composer

- OPTIONAL: install npm for using Laravel mix command
- OPTIONAL: install node.js
- OPTIONAL: install windows-sub-system "commandline" by install docker
- OPTIONAL: install laragon or xampp for DB

````shell
composer update
````

### create project
````shell
composer create-project laravel/laravel <projectName>
````

## check Installation
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

## Setup existing Laravel-Project
1. copy env.example to .env
2. start server and click "Generate App Key!


### how to create a new laravel project?
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


## General Project Setup
copy env.example to .env
start server and click "Generate App Key!


## Work with Frontend
https://www.script-example.com/laravel#frontend

Integrated pre-compiler
- Laravel Mix uses Webpack

Other pre-compiler
- Grunt
- Gulp
- Jetbrain file-watcher

packages for **Jetbrain** file-watcher
````shell
npm install -g sass
npm install -g typescript
npm install typescript --save-dev
````

## start frontend
run webpack and npm
````shell
npm run dev
````
run server
````shell
php artisan serve
````
# Troeblechooting
#### Caches
https://www.codegrepper.com/code-examples/php/laravel+clear+database+cache
## DB reset:
del all tables, migrate and seed
````shell
php artisan migrate:fresh --seed
````

# Info
<pre>
tsconfig.json can be configured for all projects.
In this Repository it configured in each project itself.
The Public Folder is Excludet from Search-Index
</pre>



<br />
<br />

# DE
## Schritte, um die Projekte nutzen zu können

Alle Projekte sind in den Unterordnern der ersten Ebene abgelegt.


## Bereite deine Systemumgebung vor (windows), um Laravel nutzen zu können

1. Downloade php, Empfohlen: xampp für PHP und Datenbank
https://www.php.net/manual/de/install.windows.tools.php

2. Setz einen Systempfad: Systemeinstellungen -> erweiterte Systemeinstellungen -> Erweitert -> Umgebungsvariablen,
Der Pfad wird auch bei der Installation von Composer abgefragt.

3. Installiere Composer

- OPTIONAL: installiere npm, um Laravel mix per Befehl ausführen zu können. (Und andere NPM Packete)
- OPTIONAL: installiere node.js
- OPTIONAL: installiere windows-sub-system für Linux, um dessen "commandline" nutzen zu können durch die Installation von Docker
- OPTIONAL: installiere laragon oder xampp zum betreiben der DatenBank


## Projects:
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
J jetstream https://jetstream.laravel.com/2.x/introduction.html
K
L
M 
N nova
O ori-to_update
P public_table post_9.4.1
Q
R react
S s_apps (sail spark scout socialite sanctum)
T template (TS SASS) telescope (non local)_9.5.1
U
V vue vapier valet
W (tail)wind (can use by jetstream)
X Y Z
````
base version: 9.1.0


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
