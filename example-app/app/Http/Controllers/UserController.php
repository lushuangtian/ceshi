<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    //测试一下
    public function index(Request $request)
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail(1)
        // ]);
        $name = $request->input('name');
        var_dump($name);
        return view('user');
    }

    //测试一下
    public function index2(Request $request)
    {
        $name = $request->input('name');
        var_dump($name);
        return view('user');
    }
}
