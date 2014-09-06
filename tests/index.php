<?php

/**
  include_once 'examples.php';

  exampleBasicInstructions();
  exampleFull();
  exampleQueryParcels();
 * 
 */
include '../boot.php';

$moip = new Moip_Api();
$moip->setEnvironment(Moip_Environment::ENVIRONMENT_DEV);
$moip->setCredential(array(
    'key' => 'ABABABABABABABABABABABABABABABABABABABAB',
    'token' => '01010101010101010101010101010101'
));

$moip->setUniqueID(false);
$moip->setValue('100.00');
$moip->setReason('Teste do Moip-PHP');

$moip->validate('Basic');

$moip->send();
echo '<pre>';
print_r($moip->getAnswer());

?>
