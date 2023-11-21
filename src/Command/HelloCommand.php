<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Usage:
 *
 *     $ php bin/console app:hello
 *
 * Manually register each Command class in bin/console
 *
 * symfony/console documentation: https://symfony.com/doc/current/components/console.html
 */
class HelloCommand extends Command
{
    protected static $defaultName = 'app:hello';

    protected function configure()
    {
        $this->setDescription('Confirms Commands can be called');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello php-skeleton');

        return Command::SUCCESS;
    }
}
