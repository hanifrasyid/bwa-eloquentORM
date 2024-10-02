<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadiums extends Model
{
    public $table = 'stadiums';

    protected $fillable = [
        'name',
        'capacity',
        'address',
        'created_at',
        'updated_at',
    ];

    // relation
    public function clubs() 
    {
        return $this->hasOne('App\Model\Clubs', 'stadiums_id');
    }
}