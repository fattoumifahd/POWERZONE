<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    protected $fillable=['type','tarif','duree','dateD','dateF','client_id','payer'];
    protected $attributes = [
        'payer' => false,
    ];
    public function client(){

        return $this->belongsTo(Client::class);
    }
    use HasFactory;
}
