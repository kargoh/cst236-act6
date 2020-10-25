<?php

require_once 'Autoloader.php';
require_once 'UserDataService.php';

class UserBusinessService {
    
    function __construct() {
        
    }

    function searchByFirstName($pattern) {
        $service = new UserDataService();
        return $service->searchByFirstName($pattern);
    }

}

?>