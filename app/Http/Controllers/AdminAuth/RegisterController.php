<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use App\Admin;

use Auth;

class RegisterController extends Controller
{
    protected $redirectPath = 'admin_home';

    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create Admin
        $admin = $this->create($request->all());

        //Authenticates Admin
        $this->guard()->login($admin);

       //Redirects Admin
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new admin instance after a validation.
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

     //Get the guard to authenticate Admin
   protected function guard()
   {
       return Auth::guard('web_admin');
   }
}
