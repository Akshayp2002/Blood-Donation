<?php

namespace App\Http\Controllers;
use App\Models\UserDonor;
use App\Models\User;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }

    public function donorform(){
        return view('users.donor-form');
    }

    public function donor_save(Request $request){

            $validator =$request->validate([
                'name' => 'required',
                'age' => 'required',
                'bloodgroup' => 'required',
                'address' => 'required',
                'discription' => 'required'
            ]);


            $data = new UserDonor();

            $data->name = $request->input('name');
            $data->age = $request->input('age');
            $data->bloodgroup = $request->input('bloodgroup');
            $data->address = $request->input('address');
            $data->discription = $request->input('discription');

            $save = $data->save();

            return view('user-home');
            }

            public function view_history(){
                $data = UserDonor::all();
                return view('users.view-history',compact('data'));
            }

            public function admin_history(){
                $data = UserDonor::all();
                return view('history',compact('data'));
            }


            public function edit_history($id){ 
                $data = UserDonor::find($id);

                // echo "<pre>";print_r($data);die();
                return view('editform',compact('data'));

            }

            public function history_save(Request $request,$id){
                
                $validator =$request->validate([
                    'name' => 'required',
                    'age' => 'required',
                    'bloodgroup' => 'required',
                    'address' => 'required',
                    'discription' => 'required'
                ]);

                $data = UserDonor::all();
                UserDonor::whereId($id)->update($validator);
                return view('history',compact('data'));

            }

            public function delete_history($id){
                UserDonor::whereId($id)->delete();
                $data = UserDonor::all();

                return view('history',compact('data'));

            }
}
