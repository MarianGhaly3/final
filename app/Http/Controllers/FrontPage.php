<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\beveragesController;
use App\Models\Beverage;
use App\Models\Category;
use App\Models\Message;

class FrontPage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        $beverages = Beverage::get();
        return view('index', compact('beverages', 'categories'));     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('index#contact-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $data = $request->validate([

        //  'name' => 'required|max:100|min:4',
        //  'email' => 'required|email',
        //  'message' => 'required|max:250|min:20',
        // ]);

        // Message::create($data);
        // return redirect ('index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
