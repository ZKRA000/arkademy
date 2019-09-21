<?php

function fibo($row,$column){

  $bil_fibonanci = array(0,1);
  $hasil = '';
  $total_data = $row * $column - 2;

  for($x = 1;$x <= $total_data;$x++){

    $length = count($bil_fibonanci);
    $bil_fibonanci[1+$x] = $bil_fibonanci[$length - 2] + $bil_fibonanci[$length - 1];

  }

  for($x = 1;$x <= count($bil_fibonanci);$x++){

     if( $x % $row == 0){
       $hasil .= $bil_fibonanci[$x-1].',<br>';
     }else{
       $hasil .= $bil_fibonanci[$x-1].',';
     }
  }


  return $hasil;

}

echo fibo(3,4);


?>
