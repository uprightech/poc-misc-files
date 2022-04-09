<?php
require_once('simplesamlphp/lib/_autoload.php');

$authsource = new \SimpleSAML\Auth\Simple('default-sp');

$authsource->requireAuth();

$attributes = $authsource->getAttributes();
print_r($attributes);
