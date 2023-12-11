<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    // // --- /member
    // public function index(){
    //     return view('member.dashboard');
    // }

    // // --- /member/profile
    // public function profile(){
    //     return view('member.profile');
    // }

    // --- /member/login
    public function login(){
        return view('member.login');
    }

    // --- /member/register
    public function register(){
        return view('member.register');
    }

    // --- /member/profile
    public function view_profile(){
        return view('member.profile');
    }

    public function update_profile(){
        return view('member.update-profile');
    }
}
