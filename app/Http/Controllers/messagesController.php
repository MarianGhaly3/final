<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Category;
use App\Models\Beverage;

class messagesController extends Controller
{
    private $columns = [
        'name',
        'email',
        'message',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Contact Messages";
        $messages = Message::get();
        return view('admin/messages', compact('title', 'messages'));      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $beverages = Beverage::get();
        return view('/index', compact('categories', 'beverages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

        'name' => 'required|max:100|min:4',
        'email' => 'required|email',
        'message' => 'required|max:250|min:20',
    ]);
        Message::create($data);
        return redirect ('index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Show Message";
        $message = Message::findOrFail($id);
        return view('admin/showMessage', compact('beverage', 'title'));       }

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
