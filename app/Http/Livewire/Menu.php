<?php

namespace App\Http\Livewire;

use App\Models\Backend\Kategori;
use App\Models\Backend\Menu as BackendMenu;
use Livewire\Component;
use Livewire\WithPagination;


class Menu extends Component
{

    public $search='';

    protected $queryString = ['search'];

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if($this->search)
        {
            $menu = BackendMenu::where('nama_menu', 'like', '%'.$this->search.'%')->paginate(6);
        } else {
            $menu = BackendMenu::paginate(6);
        }
        return view('livewire.menu',[
            'menus' => $menu,
            'kategoris' => Kategori::all()
        ])->extends('layouts.app')
        ->section('content');
    }
    public function paginationView()
    {
        return 'livewire.livewire-pagination-links';
    }
}
