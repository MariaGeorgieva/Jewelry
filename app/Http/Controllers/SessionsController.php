<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class SessionsController
 * @package App\Http\Controllers
 */
class SessionsController extends Controller
{
    /**
     * SessionsController constructor.
     */
    public function __construct()
    {

        $this->middleware('guest', ['except' => 'destroy']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('sessions.create');
    }

    /**
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        //Attempt to authenticate user.
        //If not, redirect back
        //If so, sign them in

        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'massage' => 'Please check your credentials and try again'
            ]);
        }

        //Redirect to the home page.
        return redirect()->home();
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy()
    {
        auth()->logout();

        return redirect()->back();

    }
}
