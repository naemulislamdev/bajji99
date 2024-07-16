<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Auth;
use Hash;
use Request;

class RegisterController extends Controller
{
    public function registerStore(UserRequest $request)
    {
        // Create the user
        try {
            $user = User::create([
                'name' => $request->username,
                'email' => $request->username . '@gmail.com',
                'password' => Hash::make($request->password),
                'role' => 'user'
            ]);

            // Automatically log in the user
            Auth::login($user);

            // Redirect to the user dashboard
            return redirect()->route('user.dashboard')->with('success', 'Successfully Register!');
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create user',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function loginStore(Request $request){
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('Home')->with('success', 'Successfully Register!');
    }
}
