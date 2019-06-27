@extends('master')
@section('content')
<div class="ui center aligned grid m-bottom">
  {{ $editor->links('tools.pagination') }}
</div>
<div class="ui attached segment">
<a href="{{ route('editor.create') }}">
  <button class="ui right floated positive basic button">
    + Éditeur
  </button>
</a>
  <table class="ui celled table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Ville</th>
        <th>Tél</th>
        <th>Option(s)</th>
      </tr>
    </thead>
    <tbody>
      @foreach($editor as $item)
      <tr>
        <td>{{ $item->EditeurNom }}</td>
        <td>{{ $item->EditeurVille }}</td>
        <td>{{ $item->EditeurTel }}</td>
        <td class="right aligned" style="max-width: 18rem"> 
          <a href="{{ route('editor.edit', $item->EditeurNum) }}">
          <button class="ui orange basic button">
            Éditer
          </button>
          </a>          
          <a href="{{ route('editor.show', $item->EditeurNum) }}">
          <button class="ui primary basic button">
            En savoir plus
          </button>
          </a>
          <a href="{{ route('editor.destroy', $item->EditeurNum) }}">
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
  {{ $editor->links('tools.pagination') }}
</div>
<style>
.m-bottom { margin-bottom:1rem !important }
.m-top { margin-top:1rem !important }
.floated { margin-bottom: 0.6rem !important }
</style>
@endsection

