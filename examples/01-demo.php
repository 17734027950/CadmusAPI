<?php
  
  use Cadmus\API\Client;
  
  include_once("../vendor/autoload.php");
  
  $api = new Client("01904164d2e2db20400612e9d70d24b3dc2db17567ec92cb93c51b87697793c1");  // Ключ к api

  // $host = "http://localhost/yangchi/git/Mine_CadmusAPI/";
  $host = "";

  $method = 'post';

  $response = $api->call($method, $host, "data/", [
    "get_a_file" => 0,
    "assoc"      => "array",
    "of"         => "parameters",
    'title'  => 'test1',
    'content'  => 'test1',
  ]);
  
  if ($response !== false)
  {
    echo "Post Result: " . print_r($response, true) . "\n";
  }
  else
  {
    echo "Post Error: " . $api->getError() . "\n";
  }
    
  
  