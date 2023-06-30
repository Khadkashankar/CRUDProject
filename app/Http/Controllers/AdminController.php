<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index()
    {
        
        $data = User::where('usertype','0')->get();
  return view('admin.home.home', compact('data'));
    }

    public function userDelete($id)
    {
   $data = User::find($id);
   $data->delete();
   return redirect()->back()->with('message','User deleted successfully !');
 
    }
    public function userEdit($id)
    {
        $data = User::find($id);
        return view('admin.home.edit',compact('data'));
    }
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect('/home')->with('info','User updated successfully !');
        
    }
}