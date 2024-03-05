<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    protected $table = 'reseps';
    protected $fillable = [
        'id_kategori',
        'id_user',
        'title',
        'bahan',
        'metode',
        'energy',
        'karbo',
        'protein',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
