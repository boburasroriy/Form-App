<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Application extends Controller
{
       public  function store(Request $request){
        if($request->hasFile('file_url')){
            $name = $request->file('file_url')->getClientOriginalName();
            $path = $request->file('file_url')->storeAs(
                'files',
                $name,
                'public'
            );
        }
         $request->validate([
            'subject'=> 'required | max:255',
            'message'=> 'required',
            'file_url'=> 'file | mimes:jpg,pdf,png'
        ]);
     $application = \App\Models\Application::create([
            'user_id'=> auth()->user()->id,
            'subject'=> $request->subject,
            'message'=> $request->message,
            'file_url'=> $path ?? null,
     ]);
     return redirect()->back();
    }
}
