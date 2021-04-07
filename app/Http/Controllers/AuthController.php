<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{

    public function login(\http\Env\Request $request)
    {
        $user=new Auth();
        if ($user->email===Input::get('email')&&$user->password===Input::get('password')){
            return route('admin');
        }
    }

    public function signup($request)
    {
        if($this->validate($request)){
            return $this->render("acbs");
        };
    }
    public function validate(\http\Env\Request $request){

    }

    public function render($data)
    {
        return view('frontend.index');
    }
}
