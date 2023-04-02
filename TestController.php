<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function skip()
    {
        $user = User::skip(4)->take(2)->get();
        print_r($user);
    }

    public function bulk()
    {
        $user = User::all();
        return view('users', ['data'=>$user]);
    }

    public function deleteUsers(Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id',$ids)->delete();
        return redirect()->back();
    }

}
