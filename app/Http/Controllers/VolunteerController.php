<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    
    public function volunteerPost(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'address' =>'required'
        ]);

      Volunteer::create($request->all());
      return redirect()->route('index')->with('success', 'Thanks for your interest in volunteering with us. We will get back to you soon!');

    }

}