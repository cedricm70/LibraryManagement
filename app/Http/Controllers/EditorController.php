<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editor;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editor = Editor::paginate(15);
        return view('editor.index')->with('editor', $editor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'creation' => 'integer',
        ], 
        [
            'creation.integer' => 'Vous devez saisir un nombre uniquement.'
        ]);

        $editor = new Editor;
        $editor->EditeurNom = $request->name;
        $editor->EditeurCreation = $request->creation;
        $editor->EditeurAdresse = $request->address;
        $editor->EditeurCP = $request->postalcode;
        $editor->EditeurVille = $request->city;
        $editor->EditeurTel = $request->tel;
        $editor->EditeurFax = $request->fax;
        $editor->EditeurMail = $request->mail;
        $editor->save();
        return redirect()->route('editor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editor = Editor::findOrFail($id);
        return view('editor.show')->with('editor', $editor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editor = Editor::findOrFail($id);
        return view('editor.edit')->with('editor', $editor);
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
        $request->validate([
            'creation' => 'integer',
        ], 
        [
            'creation.integer' => 'Vous devez saisir un nombre uniquement.'
        ]);

        $editor = Editor::findOrFail($id);;
        $editor->EditeurNom = $request->name;
        $editor->EditeurCreation = $request->creation;
        $editor->EditeurAdresse = $request->address;
        $editor->EditeurCP = $request->postalcode;
        $editor->EditeurVille = $request->city;
        $editor->EditeurTel = $request->tel;
        $editor->EditeurFax = $request->fax;
        $editor->EditeurMail = $request->mail;
        $editor->save();
        return redirect()->route('editor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Editor::destroy($id);
        return redirect()->route('editor');
    }
}
