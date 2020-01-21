<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Info;
use DB;

class User_InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $User_info=User_info::all();
        return view('user_info.view')->with('User_info',$User_info);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user_info.add');
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
        $User_info=new User_info();
        $User_info->family_id=101;
        $User_info->name=$request->input('name');
        $User_info->gender=$request->input('gender');
        $User_info->dob=$request->input('dateofbirth');
        $User_info->email=$request->input('email');
        $User_info->secondary_email=$request->input('secondaryemail');
        $User_info->primary_phone=$request->input('primaryNo');
        $User_info->secondary_phone=$request->input('secondaryNo');
        $User_info->is_parent=$request->radio2;
        $User_info->allergies=$request->input('allergies');
        $User_info->is_photo=$request->radio1;
        $User_info->emer_name=$request->input('emergname');
        $User_info->emer_phone=$request->input('emergno');
        $User_info->emer_relation=$request->input('emergrel');
        $User_info->save();
        return redirect('/')->with('success','user created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        $User_info = DB::table('user_info')->where('users_id', $id)->first();
         return view('user_info.show')->with('User_info',$User_info);
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
        $user = DB::table('user_info')->where('users_id', $id)->first();
         return view('user_info.show')->with('user',$user);
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
