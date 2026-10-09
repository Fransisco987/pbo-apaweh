<?php
class produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 100000;
$produk->stok = 0;

//hitung pajak
$pajak = Produk::PAJAK * 100; //11
$JumlahPajak = $produk->harga * Produk::PAJAK; //1,1 jt

//total
$total = $produk->harga + $JumlahPajak;

//hasil
echo "produk: ". $produk->nama;
echo "<br>";
echo "harga: ". $produk->harga;
echo "<br>";
echo "stok: ". $produk->stok;
echo "<br>";
echo "pajak: ". $pajak. "%";
echo "<br>";
echo "total harga setelah pajak: ". $total;


