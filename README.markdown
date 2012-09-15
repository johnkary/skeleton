# Project Name

Project Description

## Installation

1. Clone project and change into the cloned directory.

        git clone ...
        cd ...

2. This project uses [Composer Package Manager](http://getcomposer.org/) to
manage its dependencies. Start by downloading composer:

        curl -s http://getcomposer.org/installer | php

3. Install project dependencies:

        php composer.phar install

4. Execute project by doing... ?

## Running tests

To execute this project's test suite:

1. Install PHPUnit 3.6.10+:

        pear channel-discover pear.phpunit.de
        pear channel-discover components.ez.no
        pear channel-discover pear.symfony-project.com
        pear install phpunit/PHPUnit

2. Optionally copy and configure `phpunit.xml.dist` specifically for your
environment:

        cp phpunit.xml.dist phpunit.xml
        vi phpunit.xml

3. Run the test suite:

        phpunit

### Generating code coverage:

1. Ensure Xdebug is installed and configured for PHP.
2. Execute PHPUnit:

        phpunit --coverage-html=coverage/