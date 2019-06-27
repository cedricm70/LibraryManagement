@extends('master')
@section('content')
<div class="ui tall stacked segment">
    <div class="ui top attached label">
        Détail d'un Éditeur
    </div>
    <div class="ui list">
        <div class="item">
            <div class="header">Nom</div>
            {{ $editor->EditeurNom }}
        </div>
        <div class="item">
            <div class="header">Création</div>
            {{ $editor->EditeurCreation }}
        </div>
        <div class="item">
            <div class="header">Adresse</div>
            {{ $editor->EditeurAdresse }}
        </div>
        <div class="item">
            <div class="header">Code Postal</div>
            {{ $editor->EditeurCP }}
        </div>
        <div class="item">
            <div class="header">Ville</div>
            {{ $editor->EditeurVille }}
        </div>     
        <div class="item">
            <div class="header">Tél</div>
            {{ $editor->EditeurTel }}
        </div>   
        <div class="item">
            <div class="header">Fax</div>
            {{ $editor->EditeurFax }}
        </div>      
        <div class="item">
            <div class="header">Email</div>
            {{ $editor->EditeurMail }}
        </div>                    
    </div>
    <a href="{{ route('editor') }}">
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
