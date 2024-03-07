<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Hello; // Very important to import the model 
//use App\Nombre; // Very important to import the model here
class HelloWorld extends Controller 
{ 
  public function sayHello() 
  { 
    $helloW = Hello::helloWorldMessage();
    $funcion = Hello::nombreMessage();
    return view('hello', compact('helloW', 'funcion'));
  } 
  
} 
