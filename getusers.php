<?php

require_once 'Autoloader.php';
require_once 'UserBusinessService.php';

$bs = new UserBusinessService();

$user = $bs->searchByFirstName("a");
var_dump($bs); die;

$myJSON = json_encode($user);

echo $myJSON;

?>