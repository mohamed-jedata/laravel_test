<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;
use App\Models\User;


class PolicyController extends Controller
{
    public function index(){

        $user = auth()->user();
        $user_policies = Policy::where('user_id', $user->id)->get();

        return view('staff.dashboard',['user_policies'=>$user_policies]);
    }

    public function show($id){
        $policy = Policy::find($id);
        return view('staff.policy',compact('policy'));

    }
}
