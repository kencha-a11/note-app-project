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
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);
    
        // Debug: Check incoming request data
        // dd($request->all());
    
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];
    
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }
    
        // Debug: Check data being sent to update
        // dd($data);
    
        $user->update($data);
    
        return redirect()->route('dashboard')->with('success', 'User updated successfully.');
    }
    
    public function destroyUser()
    {
        // empty
    }
}
