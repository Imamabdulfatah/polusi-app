<?php
    $konek = mysqli_connect("localhost", "root", "", "polusi_app");

    $polusi = $_GET['polusi'];
    $tempat = $_GET['tempat'];
    $tanggal = date('Y-m-d H:i:s');
   

    // simpan ke tabel tb_sensor

    // auto increment = 1/ MENGEMBALIKAN ID menjadi 1 jika dikosongkan
    mysqli_query($konek, "ALTER TABLE tb_polusi AUTO_INCREMENT=1");


    $simpan = mysqli_query($konek, "insert into tb_polusi(polusi, tempat, tanggal)values('$polusi', '$tempat', '$tanggal')");

    // uji simpan untuk memberikan respon
    if($simpan)
        echo "Berhasil dikirim";
    else
        echo "Gagal Terkirim";

?>