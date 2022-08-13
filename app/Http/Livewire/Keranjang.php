<?php

namespace App\Http\Livewire;

use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Keranjang extends Component
{
    protected $pesanan;
    protected $pesanan_details = [];
    public function render()
    {
        if(Auth::user())
        {
            $this->pesanan = Pesanan::where('user_id',Auth::user()->id)->where('status',0)->first();
            if($this->pesanan)
            {
                $this->pesanan_details = PesananDetail::where('pesanan_id',$this->pesanan->id)->get();
            }
        }

        return view('livewire.keranjang',[
            'pesanan' => $this->pesanan,
            'pesanan_details' => $this->pesanan_details
        ])->extends('layouts.app')
        ->section('content');
    }
}
