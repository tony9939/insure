<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype === 'user') {
                return view('dashboard');
            } elseif ($usertype === 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }

        // Redirect unauthenticated users to the login page
        return redirect()->route('login');
    }

    public function homepage()
    {
        return view('home.homepage');
    }
}
