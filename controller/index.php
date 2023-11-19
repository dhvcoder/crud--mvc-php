<?php 
    // require_once 'employeeContr.php';
    if (isset($_GET['action'])){
        $action = $_GET['action'];
    }else {
        $action = '';
    }

    switch ($action){
        case 'add':{
            require_once './view/addUser.php';
            break;
        }
        case 'danhsach' :{
            require_once './view/danhsach.php';
            break;
        }
        case 'update' :{
            require_once './view/update.php';
            break;
        }
        case 'lienhe' : {
            require_once './view/lienhe.php';
            break;
        }
        case 'dangnhap' : {
            require_once './view/dangnhap.php';
            break;
        }
        
    }
?>