<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $last_user = User::orderBy('id_user', 'desc')->first();
        // $last_user = User::all();
        // return $last_user;
        if ($last_user == null) {
            $newIdUser = 'USR' . date('Ymd') . '001';
        }else{
            $last_user = User::orderBy('id_user', 'desc')->first()->id_user;
            $lastIncreament = substr($last_user, -3);
            // Make a new order id with appending last increment + 1
            $newIdUser = 'USR' . date('Ymd') . str_pad($lastIncreament + 1, 3, 0, STR_PAD_LEFT);   
        }
        return view('home', compact('newIdUser'));
    }
}
