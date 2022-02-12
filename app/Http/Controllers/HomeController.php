<?php

namespace App\Http\Controllers;

use App\Models\UserFolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Traits\HasRoles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user()->hasRole('user')){
             $folios = UserFolio::where('user_id', Auth::user()->id)->get();
            return view('admin.backend.dashboard', compact('folios'));
        }else{
            return view('admin.backend.dashboard');
        }


    }
}
