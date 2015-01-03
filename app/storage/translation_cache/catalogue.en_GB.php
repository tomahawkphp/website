<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('en_GB', array (
  'messages' => 
  array (
    'hello' => 'Yo',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
));
$catalogue->addFallbackCatalogue($catalogueEn);


return $catalogue;
