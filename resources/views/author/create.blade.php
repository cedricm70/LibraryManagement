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
                <input type="text" name="lastname" required maxlength="40">
            </div>
            <div class="field">
                <label>Prénom</label>
                <input type="text" name="firstname" required maxlength="20">
            </div>
            <div class="field">
                <label>Pseudo</label>
                <input type="text" name="username" maxlength="50">
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label>Date de naissance</label>
                <input type="date" name="birth" required>
            </div>
            <div class="field">
                <label>Date de décès</label>
                <input type="date" name="death">
            </div>
            <div class="field">
                <label>Pays</label>
                <input type="text" name="country">
            </div>
        </div>
        <div class="field">
            <label>Biographie</label>
             <textarea maxlength="2000" name="biography"></textarea>
        </div>
    <button class="positive ui button">Ajouter l'auteur</button>
    </form>
</div>
@endsection
