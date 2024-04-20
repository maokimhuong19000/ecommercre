<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('backend.page-login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function postLogin(Request $req){
        $req->validate([ 
            'username' => "required",
            'password' => "required",
        ]);
        $user=$req->only('username','password');
        if(Auth::attempt($user)){
            return redirect()->intended('/')
            ->withSuccess('Login Successfully!');
        }
        return redirect('/login')->with('error','Login Fail!');
    }

    public function register(){
        return view('backend.page-register');
    }

    public function postRegisteration(Request $req){
        
        try{
        
        $req->validate([
            'username' => "required",
            'email'=> 'required',
            'name' => 'required',
            'password' => "required",
            'language'=> "required",
        ]);
        
        $user = [
            'name' => $req->name,
            'username' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'language'=>$req->language,
         ];

         $iuser = DB::table('users')->insert($user);

         if($iuser){
            return redirect('/login')->with('success_register', 'User registered successfully!');
         } else {
            return redirect()->back()->with('error_register', 'Failed to insert user!');
         }
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
