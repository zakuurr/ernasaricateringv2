<?php

namespace App\Http\Livewire;

use App\Models\Backend\Kategori;
use App\Models\Backend\Menu as BackendMenu;
use Livewire\Component;
use Livewire\WithPagination;


class Menu extends Component
{

    public $searchTerm;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.menu',[
            'menus' => BackendMenu::where('nama_menu','LIKE',$searchTerm)->paginate(6),
            'kategoris' => Kategori::all()
        ])->extends('layouts.app')
        ->section('content');
    }
    public function paginationView()
    {
        return 'livewire.livewire-pagination-links';
    }
}
