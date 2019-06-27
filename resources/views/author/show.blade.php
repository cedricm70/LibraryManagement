@extends('master')
@section('content')
<div class="ui tall stacked segment">
    <div class="ui top attached label">
        Détail d'un Auteur
    </div>
    <div class="ui list">
        <div class="item">
            <div class="header">Nom</div>
            {{ $author->AuteurNom }}
        </div>
        <div class="item">
            <div class="header">Prénom</div>
            {{ $author->AuteurPrenom }}
        </div>
        <div class="item">
            <div class="header">Pseudo</div>
            {{ $author->AuteurPseudo }}
        </div>
        <div class="item">
            <div class="header">Date de naissance</div>
            {{ $author->AuteurDateNaiss }}
        </div>
        <div class="item">
            <div class="header">Date de décès</div>
            {{ $author->AuteurDeces }}
        </div>     
        <div class="item">
            <div class="header">Pays</div>
            {{ $author->AuteurPays }}
        </div>   
        <div class="item">
            <div class="header">Biographie</div>
            {{ $author->AuteurBiographie }}
        </div>           
    </div>
    <a href="{{ route('author') }}">
        <button class="ui primary basic button">
            Retour
        </button>
    </a>
</div>
<style>
.item { margin-bottom: 0.3rem !important }
.header { margin-bottom: 0.2rem !important; text-decoration: underline }
</style>
@endsection
