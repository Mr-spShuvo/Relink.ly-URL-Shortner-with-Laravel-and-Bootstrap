<?php
namespace App\Classes;
class RandomString{

  /**
  * Genarate Random String
  * @param $length (integer) - Random Strings Length
  * @return $str  (string) - Random String
  */
  function rand_str( $length )
  {
    $str="";
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $size = strlen( $chars );
    for( $i = 0; $i < $length; $i++ )
    {
      $str .= $chars[ rand( 0, $size - 1 ) ];
    }
    return $str;
  }

}
