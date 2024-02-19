<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillTestController extends Controller
{
    public function index(Request $request){
        $newArr = array();
        $inpChar = [9, 3, 7, 8, 2, 6, 1, 4, 10, 2, 2, 3];

        for ($i=0; $i < count($inpChar) ; $i++) { 
            for ($j=$i; $j < count($inpChar); $j++) {
                
                return $this->json(['hasil' => $inpChar]);
            }
        }   
    }
}
