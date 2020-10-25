<?php
    

class UserDataService {
    
    function __construct() {
        
    }
    
    function searchByFirstName($pattern) {

    echo "test"; die;
        $db = new Database();
        $conn = $db->getConnection();

        $sql = "SELECT * FROM users WHERE FIRST_NAME LIKE '%$pattern%'";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            $conn->close();
            return null;
        }

        $index = 0;
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[$index] = array($row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"], $row["USERNAME"], $row["ROLE"], $row["PASSWORD"]);
            ++$index;
        }

        $conn->close();

        return $users;
    }

}

?>