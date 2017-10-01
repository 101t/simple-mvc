# Simple MVC
A simple MVC application using pure PHP

```
.
└── simple-mvc
    ├── app
    │   ├── controllers
    │   │   ├── contact.php
    │   │   └── home.php
    │   ├── core
    │   │   ├── App.php
    │   │   └── Controller.php
    │   ├── database.php
    │   ├── init.php
    │   ├── models
    │   │   └── User.php
    │   └── views
    │       └── home
    │           └── index.php
    ├── composer.json
    ├── public
    │   └── index.php
    └── README.md

8 directories, 11 files
```

# Requirements

`php-cli` and `composer`
### Debian
First, update the package manager cache by running:

```bash
sudo apt-get update
sudo apt-get install php-cli git curl php-mbstring unzip
```
Composer installation

```bash
curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```
Verify composer running well by
```bash
composer
```
And you should get output similar to this:

Output
```
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.5.2 2017-09-11 16:59:25

Usage:
  command [options] [arguments]

Options:
  -h, --help                     Display this help message
  -q, --quiet                    Do not output any message
  -V, --version                  Display this application version
      --ansi                     Force ANSI output
      --no-ansi                  Disable ANSI output
  -n, --no-interaction           Do not ask any interactive question
      --profile                  Display timing and memory usage information
      --no-plugins               Whether to disable plugins.
. . .
```

This means Composer was succesfully installed on your system.

# Installation

```bash
git clone https://github.com/tarek-aec/simple-mvc.git
cd simple-mvc/
composer update
cd public/
php -S 127.0.0.1:8888
```
