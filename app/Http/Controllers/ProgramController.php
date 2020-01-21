<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use DB;
use Auth;
use Carbon\Carbon;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Program=Program::all();
         return view('Program.view')->with('Program',$Program);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Program.register');
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
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'fees'=>'required',
            'age_lower'=>'required',
            'age_upper'=>'required'
        ]);

        $Program=new Program();
        $Program->program_name=$request->input('name');
        $Program->age_lower=$request->input('age_lower');
        $Program->age_upper=$request->input('age_upper');
        $Program->start_date=$request->input('start_date');
        $Program->end_date=$request->input('end_date');
        $Program->fees=$request->input('fees');
        $Program->description=$request->input('description');
        $Program->save();
        return redirect('/')->with('success','program created');
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
        // $family_id=DB::table('user_info')->select('family_id')->where('users_id', Auth::id())->first();
        $Program = DB::table('program')->where('program_id', $id)->first();
        $min = DB::table('program')->where('program_id', $id)->value('age_lower');
        $max = DB::table('program')->where('program_id', $id)->value('age_upper');
        // $family_id = DB::table('user_info')->where('users_id', Auth::id())->value('family_id');
        // $myDate=DB::table('user_info')->where('family_id', $family_id)->pluck('dob');
        $maxDate=Carbon::today()->subYears($min);
        $minDate=Carbon::today()->subYears($max);
        $Members=DB::table('user_info')->whereBetween('dob',[$minDate,$maxDate])->get();
        $Program=DB::table('program')->where('program_id', $id) ->get();
        $collection = array(array($Members), array($Program));
         //$years = Carbon::parse($myDate)->age;
        // $Program = DB::table('program')->where('program_id', $id)->first();
        // $Members=DB::table('user_info')->where('family_id',$family_id)->get();
        // // $result = DB::table('user_info')
        // //         ->Join('program', function($join) 
        // //             {
        // //                 $join->on('program.age_lower', '>=', $years);
        // //                 $join->on('program.age_upper','<=',$years);
        // //             })
        // //     ->select('user_info.*', 'program.*')
        // //     ->where('family_id',$family_id)
        // //     ->get();
        // //$family_id = DB::table('program')->where('age_lower', $years)->value('family_id');
        // $result=DB::table('program')
        // ->where('age_lower', '<=', $years)
        //                 ->where('age_upper','>=',$years)->get();
        //return $Program;
       // return view('Program.show')->compact('Program',$Program);
        return view('Program.show')->with('collection',$collection);
        //return $result;
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
