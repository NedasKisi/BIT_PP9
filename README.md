### Sprint 9/ PP9

## Laravel MVC CRUD Listings app

## How to launch

-   Download [XAMPP](https://www.apachefriends.org/index.html) and install it.
-   Download [MySQL Workbench](https://www.mysql.com/products/workbench/) and install it.
-   Download or clone git repository BIT_PP9 and place it inside htdocs directory (XAMPP).
-   Run XAMPP and start Apache and MySQL server.
-   Open MySQL workbench and create a server with these settings:

```sh
Server name : localhost
Username : root
There is no password so leave it blank. If you add password please config .env file accordingly.
```

-   Open MySQL Workbench and create database.
-   Open up your project and rename .env.example to .env
-   Change database name in .env file to your created database name ( i.e. DB_DATABASE=laravel_mvc)
-   Install composer (installation instructions: [Composer](https://getcomposer.org/download)) and in the terminal:
-   if composer is installed locally in console type in: php 'path to composer.phar file'/composer.phar install
-   if composer is installed on your system globally in console type in: composer install
-   To run project in terminal type in these commands:

```sh
    php <path-to-composer.phar>/composer.phar install           Installs dependencies
    php artisan migrate                                         Creates all the nessesary tables and columns.
    php artisan db:seed                                         Adds the dummy data.
    php artisan key:generate                                    Generates app key in .env file
    php artisan serve                                           Runs live server.
```

-   Open your browser and in the searchbar type in:

```sh
http://127.0.0.1:8000/
```

-   Or press this link => [Localhost:8000](http://127.0.0.1:8000/)

-   Make sure that server details inside .env file (servername,database name, username, password) match with created server, otherwise you won't be able to launch the project.
-   Add, remove, update, view listings at will.

## How to use

-   Setup your MySQL server and launch project.
-   Visitor basic rights:
    -   You can can view pages from base page as user.
-   Registered user rights:
    -   You can create, edit and remove your listings.

## Project tasks

-   Create working Laravel MVC project using Laravel.
-   Display pages for users from MySQL server.
-   Create login.
-   Create Add new listing form.
-   Create Delete listing functionality.
-   Create Update listing form.
-   Upload to github.
-   Keep the code clean - structure ,validity, website, github.
-   Create readme.md.

## Project workflow

-   1.Database Creation with migrations, controllers and routes.
-   2.Form creation.
-   3.Views creation
-   4.Styling.
-   5.Added readme.

---

Uploaded to github to satisfy condtional commits.

---

## Goal

To create Laravel MVC CRUD application.

## About The Project

Learning project: Laravel MVC.
Project is done using Laravel.
Project is done by following Traversy Media tutorial step by step.
License : MIT.
