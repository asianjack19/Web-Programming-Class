<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    //
    public function index()
    {
        $allUsers = User::all();
        $result = [
            'users' => $allUsers,
        ];
        return view('index', $result);
    }

    public function index2($id)
    {
        $result = User::find($id);
        $result = [
            'users' => $result,
        ];
        return view('index2', $result);
    }
}
