<?php
$kode_barang = 'D';
$harga_barang = 0;

switch($kode_barang) {
    case 'A':
        $harga_barang = 5000;
        break;
    case 'B':
        $harga_barang = 10000;
        break;
    case 'C':
        $harga_barang = 20000;
        break;
    case 'D':
        $harga_barang = 50000;
        break;
    case 'E':
        $harga_barang = 100000;
        break;
    default:
        echo "Kode barang yang dimasukkan tidak valid.";
        exit();
}

echo "Harga barang tersebut adalah Rp " . $harga_barang;
?>
