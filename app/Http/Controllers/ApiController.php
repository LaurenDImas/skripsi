<?php

namespace App\Http\Controllers;
use App\Application;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function application(Request $request,$id){
        $data = Application::where('project_id',$id)->get();
        $results = [];
        $a =0;
        foreach($data as $key => $val){
            $results[$a]['id'] = $val->id;
            $results[$a]['text'] = $val->name;
            $a++;
        } 
        return response()->json([
            'data' => $results,
        ]);
    }
}
