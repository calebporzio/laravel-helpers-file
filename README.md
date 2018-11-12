# Laravel Helpers File (helpers.php)

I add a `app/helpers.php` file to every project for any custom helpers I might want to create.

Everytime I go to add one to a project, I have to dig up how to autoload a single file in my `composer.json`.

No more will I suffer.

## Installation

`composer require calebporzio/laravel-helpers-file`

`php artisan calebporzio:helpers`

This command will create a `app/helpers.php` file in your project and handle the autoloading for you automatically.

Hope this silly lil' package comes in handy for you.
