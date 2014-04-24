<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include_once './Member.php';
$Member= new Member();


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
if ( $Member->isLogined() == false ){
?>
        <div>
            <a href="giris.php">Giriş için tıklayınız</a>
            <br>
            <a href="kayit.php">Kayıt olmak için tıklayınız</a>
            
        </div>
        <?php
}else
{?>
        <div>
            <a href="uyeListe.php">Uye listesi için tıklayınız</a>
            <br>
            <a href="cikis.php">Cıkış için tıklayınız</a>
            
        </div>
        <?php
        
}
?>
    </body>
</html>
