<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Sentinel;
use Reminder;


class MainController extends Controller
{


  /*  function __construct()
    {
        return redirect('auth/login');
    }*/

    
    function login()
    {
        return view('auth.login');
    }
    function logout(Request $request)
    {
        $request->session()->put('current_user',null);
        return redirect('auth/login');
    }
    function register()
    {
        return view('auth.register');
    }
    function dashboard(Request $request)
    {
        return view('auth.dashboard', ['current_user'=>$request->session()->get('current_user')]);
    }
    function update()
    {
        return view('auth.update');
    }
    function reset()
    {
        return view('auth.reset');
    }
   
   

    function save(Request $request)
    {
        //return $request->input();
        //Validate Request
        $request->validate([
              'name' => 'required',
              'email' => 'required|email|unique:admins',
              'password' => 'required|alpha_num|min:4|max:15'
        ]);
         //INSERT DATA INTO DATABASE
         $admin = new Admin;
         $admin->name = $request->name;
         $admin->email = $request->email;
         $admin->password =Hash::make($request->password);
         $admin->token = str::random(30);
         $save = $admin->save();

         if($save)
         {
            // echo "<center><b>Registration successfull</b></center>";
             return redirect('auth/login');
         }
         else{
             echo "registration failed";
         }
       
    }
    function check(Request $request)
    {
        //return $request->input();
        $request ->validate([
           'email' => 'required|email',
           'password' => 'required|min:4|max:15'
           
        ]);
      

        $userInfo = Admin::where('email', '=', $request->email)->first();
        if(!$userInfo)
        {
            echo "Email doesnt exist";
        }
        else
        {
            //VERIFY PASSWORD
            if(Hash::check($request->password, $userInfo->password)){
                //echo "Login Succsess";
               $request->session()->put('current_user',$userInfo);
                return redirect('auth/dashboard');
            }
            else
            {
                echo "Login failed";
            }
        }
    }

 function passupdate(Request $request)
 {
   // return $request->input();
   $request ->validate([
         'password' => 'required|min:4|max:15|',
         'new_password' => 'required|different:password',
         'confirm_new_password' => 'required|same:new_password'
   ]);
   
   $logged_in_user = $request->session()->get('current_user');
   $user = Admin::where('email', '=', $logged_in_user->email)->first();
   if($user && Hash::check($request->password, $user->password))
   {
        $user->password =Hash::make($request->new_password);
        if($user->save()){
            return redirect('auth/login');
            
        }
    }
   else
  {
    echo "Your old password is invalid";
 

    }
   
 }




 

 function sendMail(Request $request)
 {
   // return $request->input();
   $user = Admin::whereEmail($request->email)->first();

   if($user == null)
   {
       echo "Email does not exists";
   }

  
 }



}

