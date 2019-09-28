<?php
   $link = mysqli_connect("localhost", "root", "root","arkademy");

   if(!$link){
     echo mysqli_errno();
   }
?>
