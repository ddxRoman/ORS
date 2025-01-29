<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TgBotController extends Controller
{
    public function send(Request $request){
$validatedData=$request->validate([
'data'=>'string',
'holiday'=>'string',
'description'=>'string',
'url'=>'string',
'comments'=>'string'
]);
   $text="<b>Дата: </b>{$validatedData['data']}\n<b>Праздник: </b>{$validatedData['holiday']}\n<b>Подпись:    </b>{$validatedData['description']}\n<b>Коммент: </b>{$validatedData['comments']} ";
            \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot6048362058:AAFv50Fltmm_0Ufa-GYzAga-poK1-niyxVo/sendMessage',
            ['chat_id'=>env('CHAT_ID'),
            'text'=> $text, 
            'file'=>$validatedData["url"],
            'parse_mode'=>'html'
            ]);
dd($text);
    }
}