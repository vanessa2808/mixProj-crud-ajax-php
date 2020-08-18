
<?php
session_start();
ob_start();
include 'controller/userController.php';


    $userController = new userController();
    $userController->handleRequest();


?>



