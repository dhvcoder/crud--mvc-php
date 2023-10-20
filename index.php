<?php 
    include './config/database.php' ;
?>

     <?php  
        include './view/layout/header.php' ;
         if (isset($_GET['page_layout'])) {
            $controller = $_GET['page_layout'] ;
        }else {
            $controller= '';
        }

        switch ($controller){
            case 'indexContr' :{
                require_once './controller/index.php';
                break;
            }
            case 'employees' :{
                require_once './controller/employeeContr.php';
                break;
            }
            default : {
                require_once './view/danhsach.php';
                break;
            }
        }
        
    ?>
