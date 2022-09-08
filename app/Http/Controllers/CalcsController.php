<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
    public function result($figure1, $calc , $figure2){ 
        switch ($calc){
        case 'addition' :
            $result = $figure1 + $figure2;
            break ;
        case 'subtraction':
            $result = $figure1 - $figure2;
            break;
        case 'multiplication':
            $result = $figure1 * $figure2;
             break;
         case 'division':
             $result = $figure1 / $figure2;
             break;
        }
        return view("calcs", ["result" => $result]);
    //
}
}
