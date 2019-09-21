<?php

function buyNoodle($date,$money){

  $harga_mie = 2500;
  $jumlah_mie = floor($money / 2500);
  $tanggal = $date % 2 == 0 ? 'genap':'ganjil';

  if($tanggal == 'genap'){
    if($date % 5 == 0){
      $bonus = floor($jumlah_mie / 4) * 10;
      return $jumlah_mie += $bonus;
    }else{
      return $jumlah_mie += floor($jumlah_mie / 4);
    }
  }else if($tanggal == 'ganjil'){
    if($date % 5 == 0){
      $bonus = floor($jumlah_mie / 3) * 10;
      return $jumlah_mie += $bonus;
    }else{
      return $jumlah_mie += floor($jumlah_mie / 3);
    }
  }

}

echo buyNoodle(16,40000);

?>
