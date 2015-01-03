<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fr_FR', array (
  'messages' => 
  array (
    'hello' => 'Bonjour',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
));
$catalogue->addFallbackCatalogue($catalogueFr);

$catalogueEn_GB = new MessageCatalogue('en_GB', array (
  'messages' => 
  array (
    'hello' => 'Yo',
  ),
));
$catalogueFr->addFallbackCatalogue($catalogueEn_GB);


return $catalogue;
