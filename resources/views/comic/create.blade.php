@extends('master')
@section('content')
<div class="ui tall stacked segment">
    <div class="ui top attached label">
        Ajout d'un livre
    </div>
    <form class="ui form" method="POST" data-bitwarden-watching="1">
        {{ csrf_field() }}
        <div class="three fields">
            <div class="field">
                <label>Titre</label>
                <input type="text" name="title" required maxlength="100">
            </div>
            <div class="field">
                <label>ISBN</label>
                <input type="text" name="isbn" required maxlength="18">
            </div>
            <div class="field">
                <label>Tome</label>
                <input type="text" name="tome" maxlength="10">
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label>Parution</label>
                <input type="text" name="release" maxlength="7">
            </div>
            <div class="field">
                <label>Nombre de pages</label>
                <input type="text" name="nbpages">
            </div>
            <div class="field">
                <label>Couleur</label>
                <select class="ui dropdown">
                    <option value="Couleur">Couleur</option>
                    <option value="Noir et Blanc">Noir et Blanc</option>
                    <option value="Quadrichromie">Quadrichromie</option>
                </select>
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label>Commentaires</label>
                <input type="text" name="comment">
            </div>
            <div class="field">
                <label>Format</label>
                <input type="text" name="nbpages">
            </div>
            <div class="field">
                <label>Série</label>
            </div>
        </div>
        <div class="field">
            <label>Éditeur</label>
            <input type="text" name="editor">
        </div>
    <button class="positive ui button">Ajouter le livre</button>
    </form>
</div>
@endsection
