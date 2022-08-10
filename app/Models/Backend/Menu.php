<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = "menu";

    protected $fillable = [
        'nama_menu',
        'harga',
        'deskripsi',
        'foto',
        'id_kategori'
    ];

    public function kategori()
{
    return $this->belongsTo(Kategori::class, 'id_kategori');
}

}
