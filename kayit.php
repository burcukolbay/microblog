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


if(isset($_POST['btnKaydet'])){

    $ad=($_POST['ad']);
    $soyad=($_POST['soyad']);
    $email=($_POST['email']);
    $password=($_POST['password']);
    if(strlen($ad)>3 && strlen($soyad)>3 && strlen($email)>3 && strlen($password)>3 )
    {
    if(!empty($_POST['ad']) && ($_POST['soyad']) && ($_POST['email']) && ($_POST['password']) ){
        
        $result = $Member->insert( $_POST['ad'], $_POST['soyad'], $_POST['email'], $_POST['password']);
        
        if ($result == true){
            header("Location: index.php");
            exit;
        }
    }else{
        echo 'bütün alanların doldurulması zorunludur.';
    }
}
else
    echo "Alan girişleri 3 karakterden az olmamalıdır";
    }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="frmKayit" method="POST">
            Ad: <input type="text" name="ad" value="" />
            <br>
            Soyad: <input type="text" name="soyad" value="" /> 
            <br>
            Email: <input type="text" name="email" value="" />
            <br>
            Password: <input type="password" name="password" value="" />
            <br>
            <input type="submit" value="Kaydet" name="btnKaydet" />
            <br>
            
        </form>
    </body>
</html>
