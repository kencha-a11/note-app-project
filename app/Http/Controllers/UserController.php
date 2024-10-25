<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showUser(Request $request)
    {
        $user = Auth::user();
        return view('user.show', compact('user'));
    }
    public function editUser(Request $request)
    {
        $user = Auth::user();
        return view('user.edit',compact('user'));
    }
    public function updateUser(Request $request, User $user)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id, // Ensures unique email excluding the current user
        'bio' => 'required|string|max:255',
    ]);

    // Debug: Check incoming request data
    // dd($request->all());

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'bio' => $request->bio,
    ];

    // Uncomment if password update functionality is needed
    // if ($request->filled('password')) {
    //     $data['password'] = Hash::make($request->password);
    // }

    // Debug: Check data being sent to update
    // dd($data);

    $user->update($data);

    return redirect()->route('user.show', $user->id)->with('success', 'User updated successfully.');
}

    
    public function destroyUser()
    {
        // empty
    }
}
