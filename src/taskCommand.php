<?php
namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class taskCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this    
           ->setName('say_hello')
           ->setDescription('shows hello and the entered text')
           ->addArgument('text', InputArgument::REQUIRED, 'hows hello and the entered text')
       ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Привет '.$input->getArgument('text'));
        return Command::SUCCESS;
    }
}