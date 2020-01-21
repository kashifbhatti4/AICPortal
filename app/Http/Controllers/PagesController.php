<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title='Welcome to Laravel';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title='About us';
        return view('pages.about')->with('title',$title);
    }
    public function view(){
        return view('pages.view');
    }
    public function services(){
        $data=array(
            'title'=>'Services',
            'services'=>['Adult-1- Ineligible by age','Child-1- Eligible by age','Child-2- Ineligible by age','Child-3- Eligible by age']
        );
        return view('pages.services')->with($data);
    }

}
