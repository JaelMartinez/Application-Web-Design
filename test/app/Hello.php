<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Hello extends Model 
{ 
  public static function helloWorldMessage() 
  { 
    return "hello world"; 
  } 
  public static function nombreMessage() 
  { 
    return "Angel Jael Martinez de Escobar Araiza"; 
  } 
}
