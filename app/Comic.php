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

    /**
     * Get the editor record associated with the comic.
     */
    public function editor()
    {
        return $this->hasOne(Editor::class, 'BdId', 'EditeurNum');
    }
}
