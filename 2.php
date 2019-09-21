<?php

function is_username_valid($username){

$length = strlen($username);

    if( $length >= 5 && $length <= 9){

        if(preg_match("/([A-Z0-9\s-!$%^&*@()_+|~=\`{}\[\]:\";\'<>?,.\/])/",$username)){
          return false;
        }else{
          return true;
        }

    }else{
        return false;
    }

}

function is_password_valid($password){

  $length = strlen($password);

      if( $length == 10){

        if(preg_match("/([A-Z])/",$password)){

          if(preg_match("/([\s-!$%^&*@()_+|~=\`{}\[\]:\";\'<>?,.\/])/",$password)){

            if(preg_match("/([0-9])/",$password)){

              return true;

            }else{

              return false;

            }

          }else{

            return false;

          }

        }else{

          return false;

        }

      }else{
        return false;
      }

}

?>
