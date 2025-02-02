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
    $full_text_len=$_SESSION['textfull'];
    echo "Количество символов с пробелмаи ".$full_text_len."<br>";
    $len = mb_strlen(str_replace(' ', '', $text))."<br>";
    $len = iconv_strlen(str_replace(' ', '', $text));
    echo "Количество символов без пробелов: " . $len;
    // return view('folders.count_symbol', $len, $full_text_len);
    header('Refresh: 10; /');
}
}
