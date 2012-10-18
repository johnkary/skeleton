# PHP Project Skeleton

Basic project structure for a PSR-0 compliant PHP application. Already
setup with an example class and test case to show you the way.

## Installation

1. This project manages its dependencies with [Composer](http://getcomposer.org/).
Start by installing Composer:

        curl -s http://getcomposer.org/installer | php

2. Create project skeleton:

        php composer.phar create-project johnkary/php-skeleton

3. Start developing your own project by adding your own project's
   dependencies to `composer.json`

## Running tests

To execute this project's test suite:

1. Install dev-requirements using Composer:

        php composer.phar update --dev

2. Optionally copy and configure `phpunit.xml.dist` for your project's
environment:

        cp phpunit.xml.dist phpunit.xml
        vi phpunit.xml

3. Run the test suite:

        ./vendor/bin/phpunit

### Generating code coverage:

1. Ensure Xdebug is installed and configured.
2. Execute PHPUnit:

        ./vendor/bin/phpunit --coverage-html=coverage/
