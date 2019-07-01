<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Author;
use App\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comic = Comic::paginate(15);
        return view('comic.index')->with('comic', $comic);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comic = new Comic;
        $comic->BdTitre = $request->title;
        $comic->BdIsbn = $request->isbn;
        $comic->BdTome = $request->tome;
        $comic->BdParution = $request->release;
        $comic->BdNbPages = $request->nbpages;
        $comic->BdCouleur = $request->color;
        $comic->NumSerie = 1;
        $comic->NumEditeur = 1;
        $comic->BdCommentaires = $request->comment;
        $comic->save();
        // $comic->NumEditeur = $request->tome;
    }

    public function search(Request $request)
    {
          $query = Input::get('param');
          $result = Author::where('AuteurNom', 'LIKE', '%'. $query. '%')->get();
          return response()->json($result);  
    } 
}
