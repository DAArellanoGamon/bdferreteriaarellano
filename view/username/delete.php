<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new cliente();
    $obj->delete($_GET['id']);

?>