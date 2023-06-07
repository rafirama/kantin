<?php

class Produk
{
    public $dua;
    public $tiga;
    public $satu;
    public $jmlSatu;
    public $jmlDua;
    public $jmlTiga;
    public $jmlEmpat;
    public $hargaSatu;
    public $hargaDua;
    public $hargaTiga;
    public $hargaKue;
    public $totalSeluruh;
    public $totalHargaSatu;
    public $totalHargaDua;
    public $totalHargaTiga;
    public $totalHargaEmpat;

    function __construct()
    {
        $this->hargaSatu = 2000;
        $this->hargaDua = 10000;
        $this->hargaTiga = 12000;
        $this->hargaEmpat = 7000;
    }
}

class Jumlah extends Produk
{
    public function getJumlah($jmlSatu, $jmlDua, $jmlTiga, $jmlEmpat)
    {
        $this->jmlSatu = $jmlSatu;
        $this->jmlDua = $jmlDua;
        $this->jmlTiga = $jmlTiga;
        $this->jmlEmpat = $jmlEmpat;
    }

   
    public function setHarga()
    {
        $this->totalHargaSatu = $this->hargaSatu * $this->jmlSatu;
        $this->totalHargaDua = $this->hargaDua * $this->jmlDua;
        $this->totalHargaTiga = $this->hargaTiga * $this->jmlTiga;
        $this->totalHargaEmpat = $this->hargaTiga * $this->jmlEmpat;
        $this->totalSeluruh = $this->totalHargaSatu + $this->totalHargaDua + $this->totalHargaTiga + $this->totalHargaEmpat;
    }

    public function cetakStruk()
    {
        echo "<br><br><br>";
        echo "****************************************************";
        echo "<br>";
        echo " <b> Riwayat Pembelian iKantin Wikrama </b>  ";
        echo "<br><br>";
        echo "TEH : $this->jmlSatu porsi x Rp. $this->hargaSatu : <b> Rp.$this->totalHargaSatu</b>";
        echo "<br>";
        echo "Jeruk : $this->jmlDua porsi x Rp. $this->hargaDua : <b> Rp.$this->totalHargaDua</b>";
        echo "<br>";
        echo "KOPI : $this->jmlTiga porsi x Rp. $this->hargaTiga : <b>  Rp.$this->totalHargaTiga</b>";
        echo "<br>";
        echo "SUSU : $this->jmlEmpat porsi x Rp. $this->hargaEmpat : <b>  Rp.$this->totalHargaEmpat</b>";
        echo "<br><br>";
        echo "Total Bayar : Rp. <b> $this->totalSeluruh</b>";
        echo "<br>";
        echo "****************************************************";
    }
}