<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;
    protected $fillable=[
        'categorie',
        'sous_categorie',
        'photo',
        'active	'
    ];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}
