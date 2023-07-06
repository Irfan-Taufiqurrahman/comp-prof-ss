<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash as FacadesHash;

class AuthController extends Controller
{
    public function loginIndex()
    {
        return view('Components.login');
    }

    public function regisIndex()
    {
        return view('Components.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number_handphone' => 'required|unique:users',
            'name' => 'required|min:3|max:100',
            'password' => 'required|min:6|max:100',
            'confirm_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation',
                'errors' => $validator->errors(),
            ], 422);
        }
        $user = User::create([
            'number_handphone' => $request->number_handphone,
            'name' => $request->name,
            'password' => FacadesHash::make($request->password)
        ]);
        $user->save();
        return redirect()->route('Components.loginIndex')->with('success', 'berhasil register');
    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'number_handphone' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/product');
        } else {
            return redirect()->route('Components.loginIndex')->with('error', 'Invalid credentials');
        }
    }


    public function logout(Request $request)
    {
        $request->user()->tokens()->delete(); // Revoke all access tokens for the user
        Auth::logout();

        return redirect('/login')->with('success', 'Logout successful!');
    }
}
