# PHP Project Skeleton

Basic PHP project structure for a PHP 8.1+ application. Pre-configured with an
example namespace, PHPUnit test suite, web-accessible front controller, and
command-line application.

## Installation

1. Install [Composer](http://getcomposer.org/) package manager.
2. Create project skeleton:

        $ composer create-project johnkary/php-skeleton your-new-project-dir
        $ cd !$
        $ git init

3. Start PHP's built-in web server:

        $ php -S 127.0.0.1:8000 -t www

4. Open <http://127.0.0.1:8000> to access `www/index.php`
5. Run `php bin/console` to access command-line scripts

## Running test suite

1. Optionally copy and configure `phpunit.xml.dist` for your project's
environment:

        $ cp phpunit.xml.dist phpunit.xml
        $ vi phpunit.xml

2. Run the test suite:

        $ ./vendor/bin/phpunit
