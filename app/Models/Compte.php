<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function proprietaire()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function retrait($montant)
    {

    }

    public function virement($montant, Compte $compteDestinataire)
    {

    }

    public function consultation()
    {

    }
}
