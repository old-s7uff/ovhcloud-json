<?php
class Random{
  public static function Numeric($length)
      {
          $chars = "013245766897010";
          $clen   = strlen( $chars )-1;
          $id  = '';

          for ($i = 0; $i < $length; $i++) {
                  $id .= $chars[mt_rand(0,$clen)];
          }
          return ($id);
      }

  public static function Alphabets($length)
      {
          $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
          $clen   = strlen( $chars )-1;
          $id  = '';

          for ($i = 0; $i < $length; $i++) {
                  $id .= $chars[mt_rand(0,$clen)];
          }
          return ($id);
      }

  public static function AlphaNumeric($length)
      {
          $chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
          $clen   = strlen( $chars )-1;
          $id  = '';

          for ($i = 0; $i < $length; $i++) {
                  $id .= $chars[mt_rand(0,$clen)];
          }
          return ($id);
      }
  public static function SSHkName($size)
      {
          $alpha_key = '';
          $keys = range('A', 'Z');
          for ($i = 0; $i < 2; $i++) {
                  $alpha_key .= $keys[array_rand($keys)];
          }
          $length = $size - 2;
          $key = '';
          $keys = range(0, 9);
          for ($i = 0; $i < $length; $i++) {
                  $key .= $keys[array_rand($keys)];
          }
          return $alpha_key . $key;
        }
}
  // ==========================================
  // Example usage
  // ==========================================
  // $numeric = Random::Numeric(4);
  // $alphab = Random::Alphabets(9);
  // $alphan = Random::AlphaNumeric(10);
  // $sshkname = Random::SSHkName(10);
  // echo "$numeric";
  // echo "$alphab";
  // echo "$alphan";
  // echo "$sshkname";
  // ==========================================
