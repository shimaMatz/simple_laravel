<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index');
    }

    public function confirm(ProfileRequest $request){
        // $rule = [
        //     'username' => 'required|max:12',
        //     'password' => 'required|min:8|max:12|alpha_num',
        //     'latitude' => 'numeric|between:-90,90',
        //     'longitude' => 'numeric|between:-180,180',
        // ];
        // $request->validate($rule);

        $user = $request->all();

        return view('profile.confirm', ['user' => $user]);
    }
}
