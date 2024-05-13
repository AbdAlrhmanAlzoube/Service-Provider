<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::all(); 
        return view('admin.pages.users.index', compact('users')); 
    }

    
    public function create()
    {
        return view('admin.pages.users.create');
    }



 
    public function store(UserStoreRequest $request)
    {
        $validatedData = $request->validated();
   
    
        // Upload image if provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/users', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        // Create the user
        $user = User::create($validatedData);
    
       
   
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }
    
    public function edit(User $user)
{
    return view('admin.pages.users.edit', compact('user'));
}

public function update(UserUpdateRequest $request, User $user)
{
    $validatedData = $request->validated();
    
    // Update user data
    $user->update($validatedData);

    // Redirect back to user details page or any other desired page
    return redirect()->route('users.index', $user)->with('success', 'User updated successfully');
}

    public function show(User $user)
    {
        return view('admin.pages.users.show', compact('user'));
    }

   

   
    public function destroy(User $user)
    {
        // Del.ete associated children
        $user->delete();
        // Redirect to the index page with success message
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
    
}
