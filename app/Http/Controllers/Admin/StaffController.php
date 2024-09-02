<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Policy;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\StaffRegistrationMail;
use Illuminate\Validation\Rules;




class StaffController extends Controller
{

    public function showRegistrationForm($token)
    {
        $user = User::where('remember_token', $token)->firstOrFail();
    
        return view('auth.register', ['user'=>$user]);
    }



    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::find($request->user_id);

        
        $user->update([
            'name' => $request->name,
            'password' => bcrypt($data['password']),
            'remember_token' => null, // Clear the token after registration
            'status' => "Active"
        ]);

        // login user after registration
        auth()->login($user);

        return redirect()->route('staff.policies.index')->with('success', 'Registration completed successfully.');
    }



    public function index(){

        $staffs = User::where('role', 'staff')->get();
        return view('admin.staff_lists',['staffs'=>$staffs]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        // Create a new user with 'staff' role
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'staff',
            'password' => bcrypt(Str::random(8)),
            'remember_token' => Str::random(60),

        ]);

        // Send email to the user with link for register
        Mail::to($user->email)->send(new StaffRegistrationMail($user));

        return redirect()->back()->with('success', 'Staff user created successfully, and an email has been sent.');
}

    public function show($id){

        $staff = User::find($id);
        $policies = Policy::where('user_id', null)->get();
        $user_policies = Policy::where('user_id', $staff->id)->get();

        return view('admin.staff_details',[
            'staff'=>$staff,
            'policies' => $policies,
            'user_policies' => $user_policies
        ]);
    }

    public function update(Request $request,$id){

        $request->validate([
            'name' => 'required',
        ]);


        $staff = User::find($id);
        $staff->name = $request->name;
        $staff->save();

        return redirect()->back();;
    }

    public function destroy($id)
    {
        $policies = Policy::where("user_id",$id)->update(['user_id' => null]);

        User::destroy($id);

        return redirect()->route('admin.staff.index')->with('success', 'Staff deleted!');

    }

}

