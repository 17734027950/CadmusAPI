# CadmusAPI
CadmusApi hub client library

# Example
```php
<?php
  
   use Cadmus\API\Client;
   
   include_once("vendor/autoload.php");
   
   $api = new Client("01904164d2e2db20400612e9d70d24b3dc2db17567ec92cb93c51b87697793c1");  // Ключ к api
   
   $host = "";

    $method = 'post'; // post/get

   $response = $api->call($method, $host, "data/", [
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
  ```
