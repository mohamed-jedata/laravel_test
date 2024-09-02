<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;


class PolicyController extends Controller
{

    public function update(Request $request,$id){

        try {
            $policy_id = $request->policy_id;
            $policy = Policy::find($policy_id);
            $policy->user_id = $id;
            $policy->save();

              return redirect()->back()->with("success","Policy added!!");
        } catch (\Throwable $th) {
              return redirect()->back();
        }
       

    }


    public function destroy($id){
        $policy = Policy::find($id);

        $policy->user_id = null;
        $policy->save();

        return redirect()->back()->with("success","Policy removed!!");

    }


}
