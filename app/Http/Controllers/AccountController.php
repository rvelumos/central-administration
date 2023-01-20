<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Accounts::all();
 
        return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.create'); 
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'user_name'=>'required',
            'name'=>'required',
            'password'=>'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
        ]); 
        // Getting values from the blade template form
        $account = new Account([
            'user_name' => $request->get('user_name'),
            'name' => $request->get('name'),
            'password' => $request->get('password')
        ]);
        $stock->save();
        return redirect('/accounts')->with('success', 'Account saved.');   
    }
 
    /**
     * Display the specified resource. We don't need this one for this tutorial.
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
        $stock = Account::find($id);
        return view('account.edit', compact('accounts')); 
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
        $request->validate([
            'user_name'=>'required',
            'name'=>'required',
            'password'=>'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
        ]); 
        $account = Account::find($id);        
        $account->user_name =  $request->get('user_name');
        $account->name = $request->get('name');
        $account->password = $request->get('password');
        $account->save();
 
        return redirect('/account')->with('success', 'Account updated.'); 
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Accounts::find($id);
        $acocunt->delete();
 
        return redirect('/accounts')->with('success', 'Account removed.'); 
    } 
}
