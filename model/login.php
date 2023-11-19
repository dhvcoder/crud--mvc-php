<?php
require '../config/database.php';
?>

<?php
    class Login extends Dbh {

        public function handleLogin ($email, $pass) {
            $conn = $this->Connect();
            $query = "SELECT * FROM login WHERE email = :email AND password = :pass " ;
            $stm = $conn->prepare($query);
            $stm->execute(array(
                ":email" => $email, 
                ":pass" => $pass
            ));
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            if (count($result) > 0) {
                return $result;
            } else {
                return false; // Trả về false nếu không có kết quả
            }
        }   
    }
?>

