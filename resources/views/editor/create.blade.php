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
                <input type="text" name="name" required maxlength="40">
            </div>
            <div class="field @error('creation') error @enderror">
                <label>Création</label>
                <input type="text" name="creation" required maxlength="11">
                @error('creation')
                    <small class="text-red">{{ $message }}</small>
                @enderror
            </div>
            <div class="field">
                <label>Adresse</label>
                <input type="text" name="address" maxlength="60">
            </div>
        </div>
        <div class="three fields">
            <div class="field">
                <label>Code Postal</label>
                <input type="text" name="postalcode" maxlength="11">
            </div>
            <div class="field">
                <label>Ville</label>
                <input type="text" name="city" maxlength="50">
            </div>
            <div class="field">
                <label>Tél</label>
                <input type="text" name="tel" maxlength="11">
            </div>
        </div>
        <div class="two fields">
            <div class="field">
                <label>Fax</label>
                <input type="text" name="fax" maxlength="11">
            </div>
            <div class="field">
                <label>Email</label>
                <input type="text" name="mail" maxlength="50">
            </div>
        </div>
    <button class="positive ui button">Ajouter l'éditeur</button>
    </form>
</div>
@endsection
