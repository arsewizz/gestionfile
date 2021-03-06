<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archive;

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
        $archives = Archive::all();
        return view('home')->with('archives', $archives);
    }

    public function file_detail(Request $id)
    {
        $archives = Archive::find($id);
        return view('detail')->with('archives', $archives);
    }
}
