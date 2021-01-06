<?php
  
  use Cadmus\API\Client;
  use Cadmus\API\File;
  
  include_once("vendor/autoload.php");
  
  $cadmusApi = new Client("01904164d2e2db20400612e9d70d24b3dc2db17567ec92cb93c51b87697793c1");  // Ключ к api
  
  // Имя АПИ, Параметры
  var_dump($cadmusApi->call("pg/qr.decode", ['image' => new File('qr.png')]));