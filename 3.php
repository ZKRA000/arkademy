<?php

function count_handshaker($jumlah_orang){

  $jumlah_perulangan = $jumlah_orang - 1;
  $total = 0;

  for($x = 0;$x <= $jumlah_perulangan;$x++){
     $total += $x;
  }

  return $total;

}

echo count_handshaker(4);

?>
