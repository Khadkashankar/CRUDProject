<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Session;

class UserController extends Controller
{
    public function index()
    {
        return view('front.login');
    }

    public function  checkLogin(Request $request)
    {
       $request->validate([
            'email' => 'required|email',
            'password'=> 'required',
            ],[
                'email'=>'Email is required',
            ]);
               
                $user = User::where('email', '=', $request->email)->first();
               if($user && Hash::check($request->password, $user->password))
               {
                   if($user->usertype == '1')

                   {
                
                    $data = User::where('usertype','0')->get();
                    return view('admin.home.home', compact('data'));
                    }
                    else
                    {
                       
                        $userName = $user->name;
                        return view('user.home', compact('userName'));
                       
                    }
            }
               else
               {
                return redirect()->back()->with('error','Credential does not matched');
               }
    }

    public function showRegister()
    {
        return view('front.register');
    }

    public function userStore(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required|email|string|unique:users',
            'phone'=> 'required|numeric|min:10',
            'address'=> 'required',
            'password'=> 'required|min:8|string',
        ],[
            'phone.numeric'=>'Phone number must be in number',
            'password'=>'password must be at least 8 characters',
        ]);
        if($validator){
            $input = $request->all();
            $input['password']=Hash::make($request->password);
            User::Create($input);
            return redirect()->route('/')->with('success', 'User Registered Successfully');
        }
        // else{
        //     return redirect()->back()->with('error', 'Please enter valid credentials !');

        // }
    }
    public function userLogout()
    {
        dd(Session::flush());
        
        Auth::logout();

        return redirect('/register');
    }


}