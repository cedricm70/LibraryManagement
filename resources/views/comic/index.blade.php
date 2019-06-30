@extends('master')
@section('content')
<div class="ui center aligned grid m-bottom">
  {{ $comic->links('tools.pagination') }}
</div>
<div class="ui attached segment">
<a href="{{ route('comic.create') }}">
  <button class="ui right floated positive basic button">
    + Livre
  </button>
</a>
  <table class="ui celled table">
    <thead>
      <tr>
        <th>Titre</th>
        <th>ISBN</th>
        <th>Tome</th>
        <th>Option(s)</th>
      </tr>
    </thead>
    <tbody>
      @foreach($comic as $item)
      <tr>
        <td>{{ $item->BdTitre }}</td>
        <td>{{ $item->BdIsbn }}</td>
        <td>{{ $item->BdTome }}</td>
        <td class="right aligned" style="max-width: 20rem"> 
          <a href="">
          <button class="ui orange basic button">
            Éditer
          </button>
          </a>          
          <a href="">
          <button class="ui primary basic button">
            En savoir plus
          </button>
          </a>
          <a href="">
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
  {{ $comic->links('tools.pagination') }}
</div>
<style>
.m-bottom { margin-bottom:1rem !important }
.m-top { margin-top:1rem !important }
.floated { margin-bottom: 0.6rem !important }
</style>
@endsection

