<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'bd';
    protected $primaryKey = 'BdId';
    public $timestamps = false;

    protected $fillable = [
        'BdTitre', 'BdIsbn', 'BdTome', 'BdParution', 'BdNbPages', 'BdImage', 'BdCouleur', 'BdCommentaires', 'BdFormat', 'NumSerie', 'NumEditeur'
    ];
}
