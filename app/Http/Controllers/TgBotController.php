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
            \Illuminate\Support\Facades\Http::post('',
            ['chat_id'=>env('CHAT_ID'),
            'text'=> $text, 
            'file'=>$validatedData['url'],
            'parse_mode'=>'html'
            ]);
            return redirect()->route("tgbot");
    }
}
