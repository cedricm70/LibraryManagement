@extends('master')
@section('content')
<div class="ui center aligned grid m-bottom">
  {{ $author->links('tools.pagination') }}
</div>
<table class="ui celled table">
  <thead>
    <tr><th>Nom</th>
    <th>Prénom</th>
    <th>Pseudo</th>
  </tr></thead>
  <tbody>
    @foreach($author as $item)
    <tr>
      <td>{{ $item->AuteurNom }}</td>
      <td>{{ $item->AuteurPrenom }}</td>
      <td>{{ $item->AuteurPseudo }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="ui center aligned grid m-top">
  {{ $author->links('tools.pagination') }}
</div>
@endsection

<style>
.m-bottom { margin-bottom:1rem !important }
.m-top { margin-top:1rem !important }
</style>