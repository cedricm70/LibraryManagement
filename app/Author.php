<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'auteur';
    protected $primaryKey = 'AuteurId';
    public $timestamps = false;

    protected $attributes = [
        'AuteurNom', 'AuteurPrenom', 'AuteurPseudo', 'AuteurDateNaiss', 'AuteurDeces', 'AuteurPays', 'AuteurBiographie'
    ];
}
