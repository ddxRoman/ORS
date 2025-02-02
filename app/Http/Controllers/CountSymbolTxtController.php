<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountSymbolTxt;

class CountSymbolTxtController extends Controller
{
public function CountSymbol( Request $text){

    $count = new CountSymbolTxt();
    $text = $text->input('text');
    $text = str_replace(array("\r","\n"), '', $text); 
    $_SESSION['txt'] = mb_strlen(str_replace(' ', '', $text));
    $_SESSION['text']=$text;
    $_SESSION['textfull'] =  mb_strlen($text);
    echo "Количество символов с пробелмаи ". $_SESSION['textfull']."<br>";
    $len = mb_strlen(str_replace(' ', '', $text))."<br>";
    $len = iconv_strlen(str_replace(' ', '', $text));
    echo "Length of the string: " . $len;
}
}
