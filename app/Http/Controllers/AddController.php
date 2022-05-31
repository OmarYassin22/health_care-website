<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class AddController extends Controller
{
    //
    public function main()
    {

        return view('main');
    }
    public function boot(){

        Schema::defaultStringLength(191);
    }

    public function Add(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'specialty'=>'required',
            'Doctor'=>'required',
            'date' => 'required'
        ]);
 
        // store data in database
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $specialty = $request->specialty;
        $Doctor=$request->Doctor;
        $date = $request->date;
        DB::insert('insert into users(name, email, phone,specialty,Doctor,date)values(?,?,?,?,?,?)', [$name, $email,$phone, $specialty,$Doctor,$date]);
        return redirect('/main')->with(['success_message' => 'Your account was successfully created!']);
    }
}
