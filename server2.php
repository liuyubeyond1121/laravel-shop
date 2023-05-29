<?php

require_once __DIR__ . '/vendor/autoload.php';

use Adapterman\Adapterman;
use Workerman\Worker;

//$app = require_once __DIR__.'/bootstrap/app.php';


//$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
//
//$status = $kernel->handle(
//    $input = new Symfony\Component\Console\Input\ArgvInput,
//    new Symfony\Component\Console\Output\ConsoleOutput
//);
//
//
//$kernel->terminate($input, $status);

Adapterman::init();

$http_worker                = new Worker('http://0.0.0.0:8080');
$http_worker->count         = 8;
$http_worker->name          = 'AdapterMan';

$http_worker->onWorkerStart = static function () {
    //init();
    require __DIR__.'/start.php';
};

$http_worker->onMessage = static function ($connection, $request) {
    $file = __DIR__ . "/public/" . ltrim($_SERVER['REQUEST_URI'] ?? '', '/');


    if (str_contains($file, '..')) {
        $response = new \Workerman\Protocols\Http\Response(403);

        return $connection->send($response);
    }

    if (is_file($file)) {
        $response = new \Workerman\Protocols\Http\Response();
        $response->withFile($file);

        return $connection->send($response);
    }

    $connection->send(run());
};


Worker::runAll();
// php -c cli-php.ini server2.php start
