# InternetNL-batchAPI-php
This is a php client for communication with the Internet.NL batch API.

# Usage
```php
<?php
use \Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require_once 'vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, "loadClass"));

$api = new \MartinMulder\InternetNL\Api();

try {
  $web = $api->web("<name>", array('<domains>'));
  echo $web->getData()->getResults();
} catch (\MartinMulder\InternetNL\Exception\ApiException $e) {
  echo $e->getMessage() . ' @ ' . $e->getCall();
}
```
