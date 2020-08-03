<?php

require __DIR__ . '/vendor/autoload.php';

Sentry\init(['dsn' => 'http://866bcaa5332e44168409bd26bec2f3a0@localhost:9000/2']);

$teste = Sentry\State\Hub::getCurrent()->getLastEventId();

if ($teste) {
    var_dump($teste);
    die;
}

throw new Exception("My Third Sentry error!");
