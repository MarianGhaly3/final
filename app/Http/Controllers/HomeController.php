<?php

namespace App\Http\Controllers;
use App\Models\Message;

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
        $title = "Admin Dashboard";
        $messages = Message::get();
        return view('admin/home', compact('title', 'messages'));   
    }
}
