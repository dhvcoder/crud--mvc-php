<?php
    require_once "../model/login.php";
    class LoginContr {

        // public function __construct(){
        //     require_once  __DIR__ . "/../model/login.php";
        // }
        public function Dangnhap(){
           
            if(isset($_POST['dangnhap'])){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $login = new Login();
                $login->handleLogin($email, $pass);
                if($login) {
                    header('location:index.php?page_layout=indexContr&action=danhsach');
                }
                
            }
        }
    }
?>