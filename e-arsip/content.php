<?php 
    @$halaman = $_GET['halaman'];

    if($halaman == "departemen")
    {
        //Tampilkan Halaman Departemen
        //echo "Tampil Halaman Modul Departemen";
        include "modul/departemen/departemen.php";
    }
    elseif ($halaman == "pengirim_surat"){
        //Tampilkan halaman pengirim surat
        include "modul/pengirim_surat/pengirim_surat.php";
    }
    elseif($halaman == "arsip_surat")

    {
        //Tampilkan halaman arsip surat
        if(@$_GET['hal'] == "tambahdata" || @$_GET['hal'] == "edit" || @$_GET['hal'] == "hapus" ){
            include "modul/arsip/form.php";
        }else{
            include "modul/arsip/data.php";
        }
    }
    else
    {
        //echo "Tampil Halaman Home";
        include "modul/home.php";
    }
?>