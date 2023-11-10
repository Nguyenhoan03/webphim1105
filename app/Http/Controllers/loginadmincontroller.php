<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\basecategoryInterface;
use App\Models\loginadmins;
use Illuminate\Support\Facades\Log;

class loginadmincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
  

    public function index()
    {
        
    
       
       
    }

    public function login(Request $request){
        $username = $request['username'];
        $password = $request['password'];

        $tkdn = loginadmins::where('username',$username)->where('password',$password)->first();
        if ($tkdn) {
           
            $accessToken = $tkdn->createToken('login')->plainTextToken;
    
            // Trả về access token như một phản hồi
            return response()->json(['access_token' => $accessToken, 'user' => $tkdn], 200);
            Log::info('Access Token: ' . $accessToken);
        } else {
            return response()->json(['error' => 'loi'], 401);
        }

        // $credentials = $request->only('username', 'password');

        // if (Auth::attempt($credentials)) {
        //     return response()->json(['message' => 'Đăng nhập thành công'],200);
        // } else {
        //     return response()->json(['message' => 'Đăng nhập không thành công'], 401);
        // }
        
    }

    public function private($token){
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
