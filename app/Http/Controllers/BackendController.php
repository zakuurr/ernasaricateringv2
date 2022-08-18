<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
     /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->id_level == 1) {
            return view('backend/dashboard');
        }else{
            return redirect()->route('home');
        }
        
    }
}
