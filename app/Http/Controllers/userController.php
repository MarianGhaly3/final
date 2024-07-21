<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;



class userController extends Controller
{
    private $columns = [
        'fullname',
        'username',
        'email',
        'password',
        'active',
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "User List";
        $users = User::get();
        $messages = Message::get();
        return view('admin/users', compact('users','messages', 'title'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "add User";
        $messages = Message::get();
        return view('admin/addUser', compact('messages', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  
        $data = $request->validate([
            'fullname' => 'required|max:100|min:5',
            'username' => 'required|max:100|min:5',
            'email' => 'required|email',
            'password' => 'required|max:20|min:6',
        ]);

        $data['active'] = isset($request->active);

        User::create($data);
        return redirect ('admin/users');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin/showUser', compact('user'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit User";
        $user = User::findOrFail($id);
        $messages = Message::get();
        return view('admin/editUser', compact('user', 'messages', 'title'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = $request->id;

        $data = $request->validate([
            'fullname' => 'required|max:100|min:5',
            'username' => 'required|max:100|min:5',
            'email' => 'required|email',
            'password' => 'required|max:20|min:6',
        ]);

        $data['active'] = isset($request->active);

        User::where('id', $id)->update($data);
        return redirect('admin/users');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        User::where('id', $id)->delete();
        return redirect('admin/users'); 
    }
}
