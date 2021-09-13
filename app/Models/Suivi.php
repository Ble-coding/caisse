<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suivi extends Model
{
    use HasFactory;

    // protected $connection = "mysql";
    protected $table = 'suivis';

    // protected $attributes = [
    //     'status' => 0,
    // ];

    // protected $fillable = ['date', 'libelle', 'entree', 'sortie', 'initial'];
    protected $guarded = [];

    //
    
// protected $casts = [
//     'date' => 'datetime:d-m-Y',
// ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function initial(){
        return $this->belongsTo('App\Models\Initial');
    }


    // public function scopeStatus($query){
    //     return $query->where('status', 1)->get(); //query pour dire qu'il s'agit d'uen requet
    // }

    // //Pour les attributs
    // public function getStatusAttribute($attributes){
    //     return $this->getStatusOptions()[$attributes];
    // }
    // public function getStatusOptions(){
    //     return[
    //         '0' => 'Entree',
    //         '1' => 'Sortie',
    //         // '2' => 'En attente',
    //     ];
    // }
}
