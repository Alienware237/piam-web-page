<?php

// config/config.php
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $configurator) {
    // Preprocess SMTP credentials
    $username = urlencode($_ENV['SMTP_USERNAME']);
    $password = urlencode($_ENV['SMTP_PASSWORD']);
    $dsn = sprintf('smtp://%s:%s@smtp.gmail.com:465', $username, $password);

    // Debugging code
    var_dump($dsn); // Check if $dsn is correctly generated

    $configurator->parameters()
        ->set('mailer_dsn', $dsn);
};


