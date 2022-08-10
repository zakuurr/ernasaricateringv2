<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";
    protected $fillable = [
        'nama_menu',
        'harga',
        'deskripsi',
        'foto',
        'id_kategori'
    ];
    public function menu()
    {
        return $this->hasOne(Menu::class, 'id_kategori');
    }
}
