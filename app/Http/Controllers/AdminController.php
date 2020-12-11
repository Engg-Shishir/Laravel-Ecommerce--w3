<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    #<----======= Make User Login Guard ========----->
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    #<----======= Show Admin Home Page ========----->
    public function index()
    {
        return view('admin.home');
    }

    #<----======= Admin Logout ========----->
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
