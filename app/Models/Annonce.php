<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable=[
        'designation',
        'photo1',
        'description',
        'prix',
        'ville',
        'date',
        'active'
    ];
    public function sous_categorie(){
        return $this->belongsTo(SousCategorie::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function etat(){
        return $this->belongsTo(Etat::class);
    }

     public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
}
