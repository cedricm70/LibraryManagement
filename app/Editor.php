<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    protected $table = 'editeur';
    protected $primaryKey = 'EditeurNum';
    public $timestamps = false;

    protected $fillable = [
        'EditeurNom', 'EditeurCreation', 'EditeurAdresse', 'EditeurCP', 'EditeurVille', 'EditeurTel', 'EditeurFax', 'EditeurMail'
    ];
}
