<?php

namespace App\Http\Controllers;

use App\Laporan;
use App\Sawah;
use App\User;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard')->with(['sawah' => Sawah::count(), 'laporan' => Laporan::count(), 'users' => User::count()]);
    }
}
