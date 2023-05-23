<?php

        // Variable untuk menyimpan data
        $custname = $_GET['customer_name'];
        $produk = $_GET['produk'];
        $jumlah = $_GET['jumlah'];

        switch ($produk) {
            case "baju":
                $total = $jumlah * 100000;
                break;
            case "topi":
                $total = $jumlah * 20000;
                break;
            case "topi":
                $total = $jumlah * 150000;
                break;
        }

        // Untuk menampilan data dari variable
        echo '<br>Nama Customer : ' . $custname;
        echo '<br>Produk : ' . $produk;
        echo '<br>Total : ' . $jumlah;
        echo '<br>Total Belanja : ' . $total
    
?>