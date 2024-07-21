<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beverage;
use App\Models\Category;
use App\Models\Message;
use App\Traits\UploadFile;


class beveragesController extends Controller
{
    use UploadFile;

    private $columns = [
        'beverageName',
        'content',
        'price',
        'published',
        'special',
        'image',
        'category_id',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Beverages";
        $beverages = Beverage::get();
        $messages = Message::get();
        return view('admin/beverages', compact('title', 'messages', 'beverages'));      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "add Beverage";
        $categories = Category::get();
        $messages = Message::get();
        return view('admin/addBeverage', compact('title', 'messages', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'beverageName' => 'required|max:100|min:4',
            'content' => 'required|max:250|min:20',
            'price' => 'required|max:3',
            'image' => 'required|file:image',
            'category_id' => 'required',
        ]);
       
        $fileName = $this->upload($request->image, 'assets/admin/images');
        $data['image'] = $fileName;

        $data['published'] = isset($request->published) ;
        $data['special'] = isset($request->special) ;

        Beverage::create($data);
        return redirect ('admin/beverages');    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Show Beverage";
        $beverage = Beverage::findOrFail($id);
        $messages = Message::get();
        return view('admin/showBeverage', compact('title', 'messages', 'beverage'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Beverage";
        $beverage = Beverage::findOrFail($id);
        $messages = Message::get();
        return view('admin/editBeverage', compact('title', 'messages', 'beverage')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->id;

        $data = $request->validate([
            'beverageName' => 'required|max:100|min:4',
            'content' => 'required|max:250|min:20',
            'price' => 'required|max:3',
            'image' => 'sometimes|file:image',
            'category_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $fileName = $this->upload($request->image, 'assets/admin/images');
            $data['image'] = $fileName;
        }

        $data['published'] = isset($request->published) ;
        $data['special'] = isset($request->special) ;

        Beverage::where('id', $id)->update($data);
        return redirect('admin/beverages');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Beverage::where('id', $id)->delete();
        return redirect('admin/beverages');    
    }
    
}
