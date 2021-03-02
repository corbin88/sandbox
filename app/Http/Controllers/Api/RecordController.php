<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'situation' => 'required',
        ]);
       
        $data = ['data' => $request->input('emotions')];
        

        $validation = \Illuminate\Support\Facades\Validator::make($data, [
            '*.id' => 'between:1,70|poksapokdspakds',
            '*.intensity' => 'between:0,100',
            '*.new_intensity' => 'between:0,100'
        ]);

        return "Do something";
    }
}
