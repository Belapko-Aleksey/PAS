<?php

namespace App;

class TestHelper
{
 public static function Print($var)
 {
     fwrite(STDERR, print_r($var, TRUE));
 }
}