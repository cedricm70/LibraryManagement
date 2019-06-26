@extends('master')
@section('content')
<div class="ui tall stacked segment">
    <div class="ui top attached label">
        Ajout d'un auteur
    </div>
    <form class="ui form" method="POST" data-bitwarden-watching="1">
        {{ csrf_field() }}
        <div class="three fields">
            <div class="field">
                <label>Nom</label>
                <input type="text" name="lastname" value="{{ $author->AuteurNom }}" required maxlength="40">
            </div>
            <div class="field">
                <label>Prénom</label>
                <input type="text" name="firstname" value="{{ $author->AuteurPrenom }}" required maxlength="20">
            </div>
            <div class="field">
                <label>Pseudo</label>
                <input type="text" name="username" value="{{ $author->AuteurPseudo }}" maxlength="50">
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label>Date de naissance</label>
                <input type="date" name="birth" value="{{ $author->AuteurDateNaiss }}" required>
            </div>
            <div class="field">
                <label>Date de décès</label>
                <input type="date" name="death" value="{{ $author->AuteurDeces }}">
            </div>
            <div class="field">
                <label>Pays</label>
                <input type="text" name="country" value="{{ $author->AuteurPays }}">
            </div>
        </div>
        <div class="field">
            <label>Biographie</label>
             <textarea maxlength="2000" name="biography">{{ $author->AuteurBiographie }}</textarea>
        </div>
    <button class="positive ui button">Editer l'auteur</button>
    </form>
</div>
@endsection
