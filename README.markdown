# PHP Project Skeleton

Basic project structure for a PSR-0 compliant PHP application. Already
setup with an example class and test case to show you the way.

## Installation

1. Clone project and change into the cloned directory.

        git clone ...
        cd ...

2. This project uses [Composer Package Manager](http://getcomposer.org/) to
manage its dependencies. Start by downloading composer:

        curl -s http://getcomposer.org/installer | php

3. Install project dependencies:

        php composer.phar install

## Running tests

To execute this project's test suite:

1. Install dev-requirements using Composer:

        php composer.phar update --dev

2. Optionally copy and configure `phpunit.xml.dist` and configure for your
project's environment:

        cp phpunit.xml.dist phpunit.xml
        vi phpunit.xml

3. Run the test suite:

        ./vendor/bin/phpunit

### Generating code coverage:

1. Ensure Xdebug is installed and configured.
2. Execute PHPUnit:

        ./vendor/bin/phpunit --coverage-html=coverage/
