
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>{{ env('APP_NAME') }}</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/semantic.min.js') }}"></script>

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="#" class="header item">
        {{ env('APP_NAME') }}
      </a>
      <a href="#" class="item">Accueil</a>
      <div class="ui simple dropdown item">
        Gestion <i class="dropdown icon"></i>
        <div class="menu">
        <div class="header">Livres</div>
          <a class="item" href="#">Stock</a>
          <a class="item" href="#">Recherche</a>
          <div class="divider"></div>
          <a class="item">Client</a>
        </div>
      </div>
      <div class="ui simple dropdown item">
        Administration <i class="dropdown icon"></i>
        <div class="menu">
        <div class="header">Utilisateurs</div>
          <a class="item" href="#">Salariés</a>
          <a class="item" href="#">Permissions</a>
        </div>
      </div>
      <a href="{{ route('logout') }}" class="item right">Déconnexion</a>
    </div>
  </div>

  <div class="ui main container">
    @yield('content')
  </div>

  <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui horizontal inverted small divided link list">
        <p>{{ env('APP_NAME') }}</p>
      </div>
    </div>
  </div>
</body>

</html>
