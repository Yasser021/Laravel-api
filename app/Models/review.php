<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = [
        'id_resep',
        'id_user',
        'rating',
        'review',
    ];

    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
