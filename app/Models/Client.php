<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{  use HasFactory;
    protected $fillable=['cin','nomClient','prenomClient','ville','tele','salle_id'];
   
    public function salle(){
        return $this->belongsTo(Salle::class);

    }

    public function abonnements(){
        return $this->hasMany(Abonnement::class);
    }
   
}
