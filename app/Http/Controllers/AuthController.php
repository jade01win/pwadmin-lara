<?php

namespace App\Http\Controllers;

use App\Models\LoginAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public static function authLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $username = $request->input("username");
        $password = $request->input("password");
        $getUser = DB::table('users')->where('name', $username)->first();
        $encPass = base64_encode(md5($username.$password, true));
        if ($getUser->name == $username && $getUser->passwd == $encPass) {
            return redirect()->intended('/manager');
        }

        return back()->withErrors(['username' => 'Invalid username or password']);
    }

    public static function authRegist(Request $request)
    {
        $credentials = $request->only('username', 'email', 'password');
        $username = $request->input("username");
        $password = $request->input("password");
        $email = $request->input("email");
        $encPass = base64_encode(md5($username.$password, true));
        DB::table('users')->insert([
            'name' => $username,
            'email' => $email,
            'passwd' => $encPass,
        ]);
        return redirect()->intended('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LoginAuth $loginAuth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoginAuth $loginAuth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoginAuth $loginAuth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoginAuth $loginAuth)
    {
        //
    }
}
