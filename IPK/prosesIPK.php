<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $IPK = $_POST['IPK'];
    

    include "koneksi.php";
    $sql = "INSERT INTO ipk_mahasiswa VALUES ('$nim','$nama','$jurusan','$IPK')";

    $exec = mysqli_query($con, $sql)  or die(mysqli_error($con));
    
    if($exec){
        echo "Data berhasil disimpan";
    }else{
        echo "Data gagal disimpan";
    }

}