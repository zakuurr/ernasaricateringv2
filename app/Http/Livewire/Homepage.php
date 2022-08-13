<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Backend\Menu;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage',[
            'menus' => Menu::take(6)->get()
    ])->extends('layouts.app')
        ->section('content');
    }
}
