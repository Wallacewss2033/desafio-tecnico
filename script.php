<?php

    $url = 'https://github.com/Wallacewss2033/desafio-tecnico.git';

    $command = "git clone $url";

    $folder = './desafio-tecnico';

    if (!file_exists($folder)) {
        shell_exec($command);
    }

    chdir($folder);
    
    echo shell_exec('composer update')? PHP_EOL . ' - Dependencias atualizadas! ' . PHP_EOL . PHP_EOL : die('Algo saiu errado com as dependencias.');
    
    echo shell_exec('cp .env.example .env');
    
    echo shell_exec('php artisan key:generate') ? ' - Chave gerada! '. PHP_EOL . PHP_EOL : die('Não foi possível gerar chave.');

    chdir('..');

    echo PHP_EOL . PHP_EOL . 'Esse processo é demorado.';
    echo PHP_EOL . 'Aguarde, estamos buildando os containers...';

    echo shell_exec('docker-compose up -d --build');

    echo PHP_EOL . PHP_EOL . 'FIM DO SCRIPT...' . PHP_EOL . PHP_EOL;