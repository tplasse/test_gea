<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mecanicien extends Model
{
    protected $table = 'mecaniciens';
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'prenom',
    ];

    public function voitures() {
        return $this->belongsToMany(Voiture::class, 'voiture_mecanicien');
    }
}
