<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Author::paginate(15);
        return view('author.index')->with('author', $author);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Author;
        $author->AuteurNom = $request->lastname;
        $author->AuteurPrenom = $request->firstname;
        $author->AuteurPseudo = $request->username;
        $author->AuteurDateNaiss = $request->birth;
        $author->AuteurDeces = $request->death;
        $author->AuteurPays = $request->country;
        $author->AuteurBiographie = $request->biography;
        $author->save();
        return redirect()->route('author');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('author.show')->with('author', $author);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('author.edit')->with('author', $author);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->AuteurNom = $request->lastname;
        $author->AuteurPrenom = $request->firstname;
        $author->AuteurPseudo = $request->username;
        $author->AuteurDateNaiss = $request->birth;
        $author->AuteurDeces = $request->death;
        $author->AuteurPays = $request->country;
        $author->AuteurBiographie = $request->biography;
        $author->save();
        return redirect()->route('author');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Author::destroy($id);
        return redirect()->route('author');
    }
}
