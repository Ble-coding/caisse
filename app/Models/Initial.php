<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initial extends Model
{
    use HasFactory;

    protected $table = 'initials';

    // protected $attributes = [
    //     'status' => 0,
    // ];

    protected $fillable = ['initial'];

    public function suivis(){
        return $this->hasMany('App\Models\Suivi');
    }
}
