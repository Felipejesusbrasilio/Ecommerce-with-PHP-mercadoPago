<?php 

require_once 'inject_valores.php';
require_once 'produtos.php'; 
require_once 'email_pagador.php';
require_once 'vendor/autoload.php';

$access_token = '';
MercadoPago\SDK::setAccessToken($access_token);
$preference = new MercadoPago\Preference();
$item = new MercadoPago\Item();
$payment = new MercadoPago\Payment();

$item->title = $lista_p[0]->nome;
$item->quantity = 1;
$item->unit_price = (double)strval($valor[0]->precos);
$preference->items = array($item);

$preference->back_urls = array(

"success" => 'http://localhost/all-here/views/sucesso.php',
"failure" => 'http://localhost/all-here/views/error.php',
"pending" => 'http://localhost/all-here/views/pendente.php'

);

$preference->notification_url = 'http://localhost/all-here/views/notification.php';
$preference->external_reference = 200;
$preference->save();

$link = $preference->init_point;

header('location:'.$link);



?>