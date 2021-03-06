<?php

require_once './src/JWT.php';

use jwt\JWT;


$params['sub'] = '1234567890';
$params['name'] = 'John Doe';
$params['iat'] = 1516239022;

$payload = json_encode($params);
$signature = 'secret';

echo JWT::encoded($payload, $signature).PHP_EOL;
