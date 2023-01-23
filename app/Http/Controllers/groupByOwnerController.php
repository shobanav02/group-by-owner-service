<?php

namespace App\Http\Controllers;
use Nwidart\Modules\Commands\CommandMakeCommand;

use Illuminate\Http\Request;

class groupByOwnerController extends Controller
{
    public function index() {
        $array = [
            "insurance.txt" => "Company A", 
            "letter.docx" => "Company A", 
            "Contract.docx" => "Company B"
        ];

        $result = [];
        foreach($array as $key=>$val){
           $result[$val][] = $key;
        }
        return view('welcome' ,compact('result'));
    }
}
