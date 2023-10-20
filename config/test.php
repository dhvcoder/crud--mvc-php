<?php

include './config/database.php' ;

class Test extends Dbh {
    // function getAll ($Name , $Surname) {
    //     $sql = "SELECT * FROM employees WHERE Name = ? AND Surname = ? " ;
    //     $stm = $this->Connect()->prepare($sql);
    //     $stm -> execute([$Name , $Surname]);
    //     $names = $stm->fetchAll();
    //     foreach ($names as $name ) {
    //         echo $name['email'] . '<br>' ;
    //     }
    // }
    // function insertUser($Name , $Surname , $email , $phone ) {
    //     $query = "INSERT INTO employees(Name , Surname , email , phone) VALUES (? , ? , ? , ?) " ;
    //     $stm = $this->Connect()->prepare($query);
    //     $stm->execute([$Name , $Surname , $email , $phone]);
    // }
    
}
?>