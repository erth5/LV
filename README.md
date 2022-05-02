# lv

Free Laravel Projects

This projects will be a template to start using specific variants of Laravel.

# EN

## Steps to make this Projects Useable

All projects are stored in the subfolders of the first level.

### PHP-Extension

Some Projects need php extensions. To activate PHP-Extensions, create a php.ini in your PHP-Interpreter.

##### most common Path

#### C:\xampp\php\php.ini

include or add

````md
extension=fileinfo
````

## Prepair Linux

### composer

server+extensions

````shell
sudo apt install php libapache2-mod-php php-mbstring php-xmlrpc php-soap php-gd php-xml php-cli php-zip
````

app

````shell
sudo apt install curl
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer
source ~/.bashrc
composer -v
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

run server

````shell
npm install laravel-mix-serve --save-dev
````

## prepare project (windows)

1. download php, Recommended: xampp for PHP and DB
<https://www.php.net/manual/de/install.windows.tools.php>

2. set Path:

````
set PATH=%PATH%;C:\php\php.exe
````

or

- Systemeinstellungen -> erweiterte Systemeinstellungen -> Erweitert -> Umgebungsvariablen, Recommended: set path by install composer

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

sometimes when web.php has a vault, the routing stops

Löscht und Cached erneut:

````shell
:cache  
````

````shell (config, allcache, blades, web, events)
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan event:clear
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

npm will be initiate by every laravel installation

````shell
npm init
````

mostly you can update npm direct without problems

````shell
npm update
````

## General Project Setup

copy env.example to .env
start server and click "Generate App Key!

## Work with Frontend
<https://www.script-example.com/laravel#frontend>

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

# Troubleshooting

#### Caches
<https://www.codegrepper.com/code-examples/php/laravel+clear+database+cache>

## DB reset

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

# DE - Ergänzend

## Schritte, um die Projekte nutzen zu können

Alle Projekte sind in den Unterordnern der ersten Ebene abgelegt.

## Bereite deine Systemumgebung vor (windows), um Laravel nutzen zu können

1. Downloade php, Empfohlen: xampp für PHP und Datenbank
<https://www.php.net/manual/de/install.windows.tools.php>

2. Setz einen Systempfad: Systemeinstellungen -> erweiterte Systemeinstellungen -> Erweitert -> Umgebungsvariablen,
Der Pfad wird auch bei der Installation von Composer abgefragt.

3. Installiere Composer

- OPTIONAL: installiere npm, um Laravel mix per Befehl ausführen zu können. (Und andere NPM Packete)
- OPTIONAL: installiere node.js
- OPTIONAL: installiere windows-sub-system für Linux, um dessen "commandline" nutzen zu können durch die Installation von Docker
- OPTIONAL: installiere laragon oder xampp zum betreiben der DatenBank

## NeuInstallation

Bei der Installation von Frameworks als Optionale Parameter auf dieser Art wird kein Laravel installiert.

````
composer create-project laravel/<frameworkName> <projectName>
````

Daher sollte der Stack abgefragt werden oder Nach-Installieren

````
laravel new <projectName> --jet
laravel new app --stack=livewire --jet --teams
````

## Projects

Status

````
<identifier><project>
_
?   TODO?
!   TODO
'
°
§   link to existing project
$
<attribute>=<projectname>
````

Syntax

````shell
<projectname>(extension1, ...)
````

Overview

````
A !angular
B ?bootstrap breeze blog
C !cashier
D !dusk
E !envoyer
F frontend=hy forge
G ?gulp
H hy horizon
I
J jetstream
K
L livewire
M 
N nova
O ori-to_update
P public_table §post preact
Q
R ?react
S s_apps (sail spark scout socialite sanctum)
T template(TS SASS) telescope(non local)  tailwind(can use by jetstream)
U
V vue vapier valet
W 
X Y Z
````

base / minimal version: 9.9.0

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
