<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class taskCommand extends Command
{
    // the name of the command (the part after "bin/console")

    protected static $defaultName = 'app:create-text';

    protected function configure()
    {
        $this
            ->setName('say_hello many times')
            ->setDescription('shows hello and the entered text many times')
            ->addArgument('text', InputArgument::REQUIRED, 'hows hello and the entered text')
            ->addArgument('times', InputArgument::OPTIONAL, 'how many times to output');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        if ($input->getArgument('times')) {
            for ($i = 0; $i < $input->getArgument('times'); $i++) {
                $output->writeln('Привет ' . $input->getArgument('text'));
            }
        } else {
            $output->writeln('Привет ' . $input->getArgument('text'));
        }
        return Command::SUCCESS;
    }
}

