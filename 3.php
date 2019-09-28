<?php

function sortNumber($string){

  $length = strlen($string);
  $total = 0;
  $arr = array();
  $text = '';

    if(preg_match("/([0-9])/",$string)){

    for($x = 0;$x < $length;$x++){

      if(preg_match("/([0-9])/",$string[$x])){

        $arr[] = $string[$x];

      }

    }

    sort($arr);

    for($x = 0;$x < count($arr);$x++){

        $text .= $arr[$x];

    }

     echo $text;

    }else{

      echo "No number found in parameter!";
    }

}

sortNumber('hallo');

?>
