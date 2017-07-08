<?php

namespace App\Http\Controllers;

use App\Model\Festival;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    
    public function getAll()
    {
        $data = Festival::get();
        return response()->json($data);
    }

    public function getYears(Request $request){
        $name = $request->input('name');
        $years = Festival::where('name', '=', $name)
                    ->orderBy('year', 'desc')
                    ->select('year')
                    ->get();
        return response()->json($years);  
    }

    public function get(Request $request){
        $year = $request->input('year');
        $name = $request->input('name');

        $data = Festival::where([['year', '=', $year], ['name', '=', $name]])
                    ->first();

        if(is_null($data)){
            $data = Festival::where('name', '=', $name)
                    ->orderBy('year', 'desc')
                    ->first();
        }

        $previousData = Festival::where([['year', '=', $data->year - 1], ['name', '=', $name]])
                    ->first();

        return response()->json(array('current' => $data, 'previous' => $previousData));   
    }
}