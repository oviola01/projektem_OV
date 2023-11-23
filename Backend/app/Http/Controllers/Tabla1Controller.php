<?php

namespace App\Http\Controllers;

use App\Models\Tabla1;
use Illuminate\Http\Request;

class Tabla1Controller extends Controller
{
    public function index(){
        $tabla1s=response()->json(Tabla1::all());
        return $tabla1s;
    }

    public function show($id){
        $tabla1=response()->json(Tabla1::find($id));
        return $tabla1;
    }
    
    public function store(Request $request){
        $tabla1 = new Tabla1();
        $tabla1->title=$request->title;
        $tabla1->description=$request->description;
        $tabla1->end_date=$request->end_date;
        $tabla1->user_id=$request->user_id;
        $tabla1->status=$request->status;
        $tabla1->save();
    }

    public function destroy($id){
        $tabla1 = Tabla1::find($id)->delete();
        return response()->json(['message'=>'Sikeres törlés!'],201);
    }

    public function update(Request $request, $id){
        $tabla1 = Tabla1::find($id);
        $tabla1->position=$request->position;
        $tabla1->description=$request->description;
        $tabla1->start_date=$request->start_date;
        $tabla1->user_id=$request->user_id;
        $tabla1->save();
        return redirect();
    }
}
