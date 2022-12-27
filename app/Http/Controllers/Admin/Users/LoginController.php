<?php

namespace App\Http\Controllers\Admin\Users;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\Authenticate;
class LoginController extends Controller
{
    public function index()
    {
        return view('Admin.Users.Login', ['title' => 'đăng nhập hệ thống']);
    }

    public function store(Request $request)
    {
        //  dd($request->input());
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);
        if(Auth::attempt([
            'email' => $request->input('email'), 
            'password' => $request->input('password')],
            $request->input('remember')))
        {
            // $request->session()->flash('success', 'Đăng nhập thành công');
            return redirect()->route('admin');
            

        }else{
            $request->session()->flash('error', 'Email hoặc Password không đúng!!!');
            return redirect()->back();
        
        }
        
    }
}