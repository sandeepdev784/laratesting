<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Add;


class AddController extends Controller
{
    public function store(Request $request){
        $adds = new Add();
        $adds->desc = $request->desc;
        if($request->hasFile('image')){
            $image = $request->image;
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('assets/image/'), $imageName);
            $adds->image = $imageName;
        }
        $adds->save(); 
        return redirect()->back()->with('success', 'Add Successfully');
    }

    //  Profile Delete Function
    public function deleteData($id){
        $adds = Add::find($id);
        $adds->delete();
        return redirect()->back()->with('success', 'Delete Successfully');
    }
    
}
