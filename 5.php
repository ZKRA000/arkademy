<?php

function countChar($string,$char){

  $total = substr_count($string,$char);

  if($total == 0 ){
    echo "Not found!";
  }else{
    echo $total;
  }

}

countChar('zaka','a');

?>
