<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Responsable extends Authenticatable
{
    protected $fillable=['cinRespo','nomRespo','prenomRespo','teleRespo','salle_id','email','password'];
    public function salle(){
        return $this->belongsTo(Salle::class);
    }
    use HasFactory;
}
