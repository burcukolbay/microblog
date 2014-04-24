<?php
// Veritabanı bağlantısı oluştur.
$con = mysqli_connect("localhost","root","","uyeler");

// Bağlantıda hata var mı? Kontrol et.
if (mysqli_connect_errno())
{
    echo "MySQL'e bağlanmada sorun oluştu: " . mysqli_connect_error();
}