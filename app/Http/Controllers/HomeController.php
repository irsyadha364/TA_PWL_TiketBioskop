<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

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
        $search = request()->query('search');        
        if($search) {
            $movies = DB::table('movies')
                    ->where('name', "like", "%{$search}%")
                    ->paginate(6);            
        } else {
            $movies = DB::table('movies')
                    ->paginate(6);
        }        
        
        if (Auth::user()->role == "Admin") {            
            return view('admin.home', ['movies' => $movies]);
        } else {            
            return view('user.home', ['movies' => $movies]);
        }
    }
}
