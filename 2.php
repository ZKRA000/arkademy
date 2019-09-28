<?php

function is_username_valid($username){

$length = strlen($username);

    if( $length == 6){

      if(preg_match("/([A-Z])/",$username)){

        if(preg_match("/([a-z])/",$username)){

          if(preg_match("/([0-9\s-!$%^&*@()_+|~=\`{}\[\]:\";\'<>?,.\/])/",$username)){

            return false;

          }else{

            return true;

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

function is_password_valid($password){

  $length = strlen($password);

      if( $length >= 5 && $length <= 10){

        if(preg_match("/([A-Z])/",$password)){

          if(preg_match("/([\s-!$%^&*@()_+|~=\`{}\[\]:\";\'<>?,.\/])/",$password)){

            if(preg_match("/([0-9])/",$password)){

              if(preg_match("/(^7)/",$password)){

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

      }else{
        return false;
      }

}

var_dump(is_password_valid('7%ogogo'));

?>
