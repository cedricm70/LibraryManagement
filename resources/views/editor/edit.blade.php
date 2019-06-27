@extends('master')
@section('content')
<div class="ui tall stacked segment">
    <div class="ui top attached label">
        Ajout d'un éditeur
    </div>
    <form class="ui form" method="POST" data-bitwarden-watching="1">
        {{ csrf_field() }}
        <div class="three fields">
            <div class="field">
                <label>Nom et prénom</label>
                <input type="text" name="name" value="{{ $editor->EditeurNom }}" required maxlength="40">
            </div>
            <div class="field @error('creation') error @enderror">
                <label>Création</label>
                <input type="text" name="creation" value="{{ $editor->EditeurCreation }}" required maxlength="11">
                @error('creation')
                    <small class="text-red">{{ $message }}</small>
                @enderror
            </div>
            <div class="field">
                <label>Adresse</label>
                <input type="text" name="address" value="{{ $editor->EditeurAdresse }}" maxlength="60">
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label>Code Postal</label>
                <input type="text" name="postalcode" value="{{ $editor->EditeurCP }}" maxlength="11">
            </div>
            <div class="field">
                <label>Ville</label>
                <input type="text" name="city" value="{{ $editor->EditeurVille }}" maxlength="50">
            </div>
            <div class="field">
                <label>Tél</label>
                <input type="text" name="tel" value="{{ $editor->EditeurTel }}" maxlength="11">
            </div>
        </div>
        <div class="two fields">
            <div class="field">
                <label>Fax</label>
                <input type="text" name="fax" value="{{ $editor->EditeurFax }}" maxlength="11">
            </div>
            <div class="field">
                <label>Email</label>
                <input type="text" name="mail" value="{{ $editor->EditeurMail }}" maxlength="50">
            </div>
        </div>
    <button class="positive ui button">Editer l'éditeur</button>
    </form>
</div>
@endsection
