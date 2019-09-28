<?php

function thirdHighest($arr){

  $new_arr = array();

  if(is_array($arr)){
    if(count($arr) >= 3 ){

      for($x = 0;$x < count($arr);$x++){

        if(preg_match("/([0-9])/",$arr[$x])){

          $new_arr[] = $arr[$x];

        }

      }

      sort($new_arr);

      echo $new_arr[2];


    }else{
      echo 'Minimal array length is 3!';
    }
  }else{
    echo 'Parameter should be an array!';
  }

}

thirdHighest([1,2,4,3,'a',0,-1]);

?>
