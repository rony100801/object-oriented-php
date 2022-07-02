<?php

// class ContohStatic
// {
//   public static $angka = 1;
//   public static function helo()
//   {
//     return "Hello" . self::$angka++ . " kali";
//   }
// }

// echo ContohStatic::helo();
// echo ContohStatic::helo();
// echo ContohStatic::helo();
// echo ContohStatic::helo();

class Contoh
{
  public static $angka = 1;
  public function helo()
  {
    return "Helo " . self::$angka++ . " Kali <br>";
  }
}

$obj = new Contoh;
$obj2 = new Contoh;

echo $obj->helo();
echo $obj->helo();
echo $obj->helo();

echo "<hr>";

echo $obj2->helo();
echo $obj2->helo();
echo $obj2->helo();
