<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;
    protected $fillable=['nom','local','ville'];
    
    public function clients(){
        return $this->hasMany(Client::class,'salle_id');
    }

    public function responsables(){
        return $this->hasMany(Responsable::class,'salle_id');
    }
}
