<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include_once './Member.php';
$Member = new Member();

$logoutResult = $Member->logout();//true veya false döner

if ( $logoutResult == true ){
    header('Location: index.php ');
    exit;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
