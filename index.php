<?php

class Mobil {
    public $merk,
            $kecepatan = 0,
            $harga = 0;

    
    public function __construct($merk,$kecepatan,$harga){
         $this->merk = $merk;
        $this->kecepatan = $kecepatan;
        $this->harga = $harga;
    }

    function detail(){
        $str = " Merk : " . $this->merk . " | Speed : ". $this->kecepatan . "km/h |  Harga : Rp. ". $this->harga;
        return $str;
      }
}

$mobil1 = new Mobil("avanza",500,100000000);

echo $mobil1->detail();

echo "ver 1.0.0";


