<?php

$customerName = $_POST['customer_name'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];

$prices = [
    'TV' => 4200000,
    'KULKAS' => 3100000,
    'MESIN_CUCI' => 3800000,
];

if (isset($prices[$product])) {
    $price = $prices[$product];
    $totalBelanja = $price * $quantity;

    echo "<h1>Konfirmasi Belanja</h1>";
    echo "<p>Nama Customer: {$customerName}</p>";
    echo "<p>Produk Pilihan: {$product}</p>";
    echo "<p>Jumlah Beli: {$quantity}</p>";
    echo "<p>Total Belanja: Rp. {$totalBelanja},-</p>";
} else {
    echo "<p>Maaf, produk yang Anda pilih tidak tersedia.</p>";
}

?>