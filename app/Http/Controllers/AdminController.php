<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Image;
use Illuminate\Http\Request;

/**
 * Class AdminController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        return view('admin.master');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showData()
    {
        $users=User::all();
        $images=Image::all();

        return view('dashboard.data', compact('users','images'));
    }
    
}
