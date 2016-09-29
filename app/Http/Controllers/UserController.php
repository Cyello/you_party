<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use App\User;

class UserController extends Controller {

    public function getPosts ($id) {
        $posts = User::find($id)->posts;
        return $posts;
    }

    public function doLogin (Request $request) {
        if (Auth::attempt(['email' => $request->email,
            'password' => $request->password])) {
            return Auth::user();
        }

        else 
            throw new \Exception("Erro ao realizar login.");
    }

    public function doLogout () {
        Auth::logout();

        return Auth::user();
    }

    public function createLogin (Request $request) {
        $theUser = User::where('email', '=', $reques->email)->first();

        if ($theUser)
            throw new \Exception("Este email já está cadastrado!");

        $user = new User();

        $user->name = $request->name;        
        $user->date_birth = $request->date_birth; // este campo vai dar problema.
        $user->gender = $request->gender;        
        $user->state = $request->state;        
        $user->city = $request->city;        
        $user->address = $request->address;        
        $user->photo = $request->photo;        
        $user->email = $request->email;        
        $user->phone = $request->phone;        
        $user->password = bcrypt($request->password);   

        $user->save();

        Auth::login($user);
        
        return Auth::user();    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
