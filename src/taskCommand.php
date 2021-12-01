<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;


class taskCommand extends Command
{
    // the name of the command (the part after "bin/console")

    protected static $defaultName = 'app:create-quest';


    protected function configure()
    {
        $this

            ->setName('quest')
            ->setDescription('quest for task 3');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $helper = $this->getHelper('question');

        $questionName = new Question('Введите Ваше имя: ', 'Агент Смит');
        $questionAge = new Question('Введите Ваш возраст: ', 'секрет');
        $questionGender = new ChoiceQuestion(
            'Ваш пол (м)',
            ['м', 'ж'],
            0
        );   
        $questionGender->setErrorMessage('Ошибка в указании пола - позор Вам');

        $enterName = $helper->ask($input, $output, $questionName);
        $enterAge = $helper->ask($input, $output, $questionAge);
        $enterGender = $helper->ask($input, $output, $questionGender);

        $output->writeln('Здравствуйте ' . $enterName . ' Ваш возраст: ' . $enterAge. ' Ваш пол: '. $enterGender);
        return Command::SUCCESS;
    }
}

