<?php

namespace App\Http\Controllers;

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

    public function search(Request $request)
    {
          $search = $request->get('term');
      
          $result = Author::where('AuteurNom', 'LIKE', '%'. $search. '%')->get();
 
          return response()->json($result);  
    } 
}
