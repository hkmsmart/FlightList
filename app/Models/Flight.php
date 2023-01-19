<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Captain;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'flight_list';

    public function captain(){
        return $this->hasOne(Captain::class, 'id','captain_id');
    }
}
