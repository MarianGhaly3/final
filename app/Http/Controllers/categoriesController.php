<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Message;


class categoriesController extends Controller
{
    private $columns = [
        'category',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Categories List";
        $categories = Category::get();
        $messages = Message::get();
        return view('admin/categories', compact('title', 'categories', 'messages'));     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "add Category";
        $messages = Message::get();
        return view('admin/addCategory', compact('title', 'messages'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category' => 'required|max:100|min:5',
        ]);
        Category::create($data);
        return redirect ('admin/categories');    
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
        $title = "Edit Category";
        $category = Category::findOrFail($id);
        $messages = Message::get();
        return view('admin/editCategory', compact('title', 'category', 'messages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->id;
        $data = $request->validate([
            'category' => 'required|max:100|min:5',
        ]);
        Category::where('id', $id)->update($data);
        return redirect('admin/categories');     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Category::where('id', $id)->delete();
        return redirect('admin/categories');    
        }
}
