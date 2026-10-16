<?php
class produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;


    //constant
    public const PAJAK = 0.11;
    public function pajak(){
        return self::PAJAK * 100; //11
    }
    public functiontotal (){
        return $this->harga + ($this->harga * self::PAJAK)
    }
}

//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 100000;
$produk->stok = 5;


//hasil
echo "produk: ". $produk->nama;
echo "<br>";
echo "harga: ". $produk->harga;
echo "<br>";
echo "stok: ". $produk->stok;
echo "<br>";
echo "pajak: ". $produk->pajak(). "%";
echo "<br>";
echo "total harga setelah pajak: ". $produk->total();


