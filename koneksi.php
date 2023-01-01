<?php
$con = mysqli_connect("localhost", "root", "", "db_kampus");

if(!$con){
    echo "KOneksi gagal";
}

//membuat database
// $sql = "CREATE DATABASE db_kampus";
// if(mysqli_query($con, $sql)){
//     echo "Database berhasil di buat";
// }else{
//     echo "gagal membuat databse :".mysqli_error($con);
// }
// mysqli_close($con);

// membuat table
// $sql = "CREATE TABLE mahasiswa (
//     nim VARCHAR (10) NULL,
//     nama VARCHAR (25) NULL,
//     alamat VARCHAR (50) NULL,
//     telp VARCHAR (15) NULL,
//     primary key(nim)
//     )" ;

//     if(mysqli_query($con, $sql)){
//         echo "table berhasil di buat";
//     }else{
//         echo "table gagal di buat :".mysqli_error($con);
//     }

//menamahkan data
// $nim = "10101111";
// $nama = "Bona Boni";
// $alamat = "Jl. Tukad Pakerisan No. 97";
// $telp = "087655333333";

// $query = "SELECT * from mahasiswa";
// $sql = "INSERT INTO mahasiswa (nim, nama, alamat, telp) VALUES
// ('$nim', '$nama', '$alamat', '$telp')";

// $hasil = mysqli_query($con, $sql);

// if(!$hasil){
//     echo "Data gagal disimpan <br/>";
// }else{
//     echo "Data berhasil disimpan <br/>";
//     echo "NIM : $nim <br/>";
//     echo "Nama : $nama <br/>";
//     echo "Alamat : $alamat <br/>";
//     echo "Telp : $telp <br/>";

// }


//mengubah data
// mysqli_select_db($con, "db_kampus");

// $sql = "UPDATE mahasiswa set nama = 'Rona Roni', telp = '081657775987', alamat = 'jalan gowokwaru' where nim = '10101111'";

// $update = mysqli_query($con, $sql);
// if(!$update){
//     echo "data gagal di update <br/>";
// }else{
//     echo "data berhasil di update <br/>";
// }

//menampilkan data
// mysqli_select_db($con, "db_kampus");
// $sql = "SELECT nim, nama, alamat, telp FROM mahasiswa";
// $tampil = mysqli_query($con, $sql);
// while ($data = mysqli_fetch_array($tampil)){
//     echo "NIM : ".$data['nim']."<br/>";
//     echo "Nama : ".$data['nama']."<br/>";
//     echo "Alamat : ".$data['alamat']."<br/>";
//     echo "Telp : ".$data['telp']."<br/>";
//     echo "<br/>";
// }

//delete data
// mysqli_select_db($con, "db_kampus");
// $sql = "DELETE FROM mahasiswa where nim = '10101111'";
// $hapus = mysqli_query($con, $sql);
// if(!$hapus){
//     echo "Data gagal dihapus <br/>";
// }else{
//     echo "Data berhasil dihapus <br/>";

// }
?>