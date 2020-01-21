<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseSheet;

class ExpenseSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ExpenseSheet.add');
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
        $this->validate($request,[
            'item'=>'required',
            'description'=>'required',
            'merchant'=>'required',
            'expense'=>'required',
            'payment_type'=>'required',
            'status'=>'required',
            'dates'=>'required',
        ]);

        $ExpenseSheet=new ExpenseSheet();
        $ExpenseSheet->item=$request->input('item');
        $ExpenseSheet->program_id=1;
        $ExpenseSheet->description=$request->input('description');
        $ExpenseSheet->merchant=$request->input('merchant');
        $ExpenseSheet->expense=$request->input('expense');
        $ExpenseSheet->payment_type=$request->input('payment_type');
        $ExpenseSheet->status=$request->input('status');
        $ExpenseSheet->dates=$request->input('dates');

        $ExpenseSheet->save();
        return redirect('/')->with('success','Expense created');
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
