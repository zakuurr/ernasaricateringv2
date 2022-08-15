<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Backend\Menu;

class Homepage extends Component
{
      /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $user = Auth::user();
        
        if (isset($user)) {
            if ($user->id_level = 2) {
                return view('livewire.homepage',[
                    'menus' => Menu::take(6)->get()
            ])->extends('layouts.app')
                ->section('content');
            } else {
                return redirect()->route('dashboard');
            }
        }else{
            return view('livewire.homepage',[
                'menus' => Menu::take(6)->get()
        ])->extends('layouts.app')
            ->section('content');
        }
      
        
    }
}
