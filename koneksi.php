<?php
$con = mysqli_connect("localhost", "root", "");

if(!$con){
    echo "KOneksi gagal";
}else{
    echo "koneksi berhasil";
}
?>