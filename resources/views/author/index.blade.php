@extends('master')
@section('content')
<div class="ui center aligned grid m-bottom">
  {{ $author->links('tools.pagination') }}
</div>
<div class="ui attached segment">
<a href="{{ route('author.create') }}">
  <button class="ui right floated positive basic button">
    + Auteur
  </button>
</a>
  <table class="ui celled table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Pseudo</th>
        <th>Option(s)</th>
      </tr>
    </thead>
    <tbody>
      @foreach($author as $item)
      <tr>
        <td>{{ $item->AuteurNom }}</td>
        <td>{{ $item->AuteurPrenom }}</td>
        <td>{{ $item->AuteurPseudo }}</td>
        <td class="right aligned" style="max-width: 10rem"> 
          <a href="{{ route('author.show', $item->AuteurId) }}">
          <button class="ui primary basic button">
            En savoir plus
          </button>
          </a>
          <a href="{{ route('author.destroy', $item->AuteurId) }}">
            <button class="ui negative basic button">
              Supprimer
            </button>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="ui center aligned grid m-top">
  {{ $author->links('tools.pagination') }}
</div>
<style>
.m-bottom { margin-bottom:1rem !important }
.m-top { margin-top:1rem !important }
.floated { margin-bottom: 0.6rem !important }
</style>
@endsection

