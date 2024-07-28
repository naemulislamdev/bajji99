<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UserDetails;
use Auth;
use Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerStore(UserRequest $request)
    {
        // Create the user
        try {
            $user = User::create([
                'name' => $request->username,
                'email' => $request->username . '@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make($request->password),
                'role' => 'user',
                'status' => true
            ]);
            UserDetails::create([
                'user_id' => $user->id,
                'phone' => $request->phone,
                'currency' => $request->currency,
            ]);

            // Automatically log in the user
            Auth::login($user);

            // Redirect to the user dashboard
            return redirect()->route('user.deposit')->with('success', 'Successfully Register!');
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create user',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function loginStore(Request $request){
        $this->validate($request,[
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            return redirect()->route('Home')->with('success','Successfully login!');
        }

        return back()->with('error','The provided credentials do not match our records.');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('Home')->with('success', 'Logout Successfully!');
    }
}
