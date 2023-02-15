<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;
class BloodController extends Controller
{
    //

    public function groupview(){

        $data = Groups::all();
        return view('blood.viewgroups',compact('data'));
    }
   
    public function group_form(){

        return view('blood.bloodgroup');
        
    }
    public function save_group(Request $request){
        $validated = $request->validate([
            'bloodgroup' => 'required',
            'discription' => 'required'
        ]);

        $data = new Groups();

        $data->bloodgroup = $request->input('bloodgroup');
        $data->discription = $request->input('discription');

        $save = $data->save();

        if($save)
        {
          return redirect('view-group')->with('completed', ' Group has been saved');
        }
        
    }

    public function deletegroup($id){

        $data = Groups::find($id)->delete();

        return redirect('view-group')->with('completed', ' Group has been deleted');

    }
    public function editgroup($id){
        $data = Groups::find($id);
        return view('blood.editgroup',compact('data'));
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'bloodgroup' => 'required',
            'discription' => 'required'
        ]);

        Groups::whereId($id)->update($validated);
        return redirect('view-group')->with('completed', ' Group has been updated');


    }
}