<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PageController extends Controller
{
    public function dashboard(Request $request)
{
    $user = Auth::user(); // Get the authenticated user
    $notes = $user->notes; // Get the user's notes

    
    if (!$request) {
        return view('main.dashboard', [
            'user' => $user,
            'notes' => $notes,
        ]);
    } else {
        return view('main.dashboard', [
        'user' => $user,
        'notes' => $notes,
    ]);
    }

}



}
