<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {

        return view('registrations.create');
    }

    public function store(RegistrationForm $form)
    {

        $form->persist();

        session()->flash('message','Here is a default message');

        //Redirect to home page

        return redirect()->home();
    }

}
