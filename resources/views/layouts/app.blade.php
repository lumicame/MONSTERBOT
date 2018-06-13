
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" >

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{asset('semantic/semantic.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('semanticUiAlert/Semantic-UI-Alert.css')}}">
        @yield('addscript')
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('semantic/semantic.min.js')}}"></script>
<script src="{{asset('semanticUiAlert/Semantic-UI-Alert.js')}}"></script>
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-database.js"></script>

<script type="text/javascript">
  var config = {
    apiKey: "AIzaSyCs9EU1KVtu0Y64Uaen3RPwCuq4NLXazjQ",
    authDomain: "leavening-6bf8f.firebaseio.com",
    databaseURL: "https://leavening-6bf8f.firebaseio.com",
    storageBucket: "leavening-6bf8f.appspot.com",
    messagingSenderId: "leavening-6bf8f",
  };
  firebase.initializeApp(config);
</script>
    </head>
    <style type="text/css">
      #title_materia::before{
        background: none
      }
    </style>
    <body style="background:  rgb(245, 245, 243)">
        <div class="ui top fixed inverted menu" style="border-radius: inherit;padding-left: 5%;padding-right: 5%;background: #355c7d; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #355c7d, #6c5b7b, #c06c84); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #355c7d, #6c5b7b, #c06c84); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
          
            <div id="title_materia" onclick="myFunction()" style="cursor: pointer" class="item">
    <i class="bars icon" style="font-size: 28px"></i>Menú
  </div>

 <h4 id="title_materia" class="title_materia header item " style="margin-left:  auto">
     @yield('title')
  </h4>
  
  
  <div class="right menu">
  <a class="item custom">
      <i class="bell icon"></i>
  </a>
  <div class="ui custom popup" style="max-width: 400px !important;">
    <h4>Notificaciones</h4>
 <div class="ui selection list">
  <div class="item">
    <img class="ui avatar image" src="https://semantic-ui.com/images/avatar/small/veronika.jpg">
    <div class="content">
      <a class="header">Rachel</a>
      <div class="description">Last seen watching <a><b>Arrested Development</b></a> just now.</div>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar image" src="https://semantic-ui.com/images/avatar/small/veronika.jpg">
    <div class="content">
      <a class="header">Lindsay</a>
      <div class="description">Last seen watching <a><b>Bob's Burgers</b></a> 10 hours ago.</div>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar image" src="https://semantic-ui.com/images/avatar/small/veronika.jpg">
    <div class="content">
      <a class="header">Matthew</a>
      <div class="description">Last seen watching <a><b>The Godfather Part 2</b></a> yesterday.</div>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar image" src="https://semantic-ui.com/images/avatar/small/veronika.jpg">
    <div class="content">
      <a class="header">Jenny Hess</a>
      <div class="description">Last seen watching <a><b>Twin Peaks</b></a> 3 days ago.</div>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar image" src="https://semantic-ui.com/images/avatar/small/veronika.jpg">
    <div class="content">
      <a class="header">Veronika Ossi</a>
      <div class="description">Has not watched anything recently</div>
    </div>
  </div>
</div>
</div>
   <div class="ui dropdown item">
    <img class="ui avatar image" src="https://semantic-ui.com/images/wireframe/square-image.png">
    <span>{{ Auth::user()->name }}</span>
    <i class="dropdown icon"></i>
    <div class="menu">
      <a class="item">Configurar Pérfil</a>
      <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Salir</a>
    </div>
  </div>
  
  </div>
</div>

@yield('slider_bajo')

        <div class="ui left demo vertical inverted sidebar labeled icon menu">
  <a class="item" href="{{ url('/') }}">
    <i class="home icon"></i>
    Inicio
  </a>
  @yield('slider')
  <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
    <i class="sign out alternate icon"></i>
    Salir
  </a>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        <div style="margin-top: 70px">
        @yield('content')

        </div>
    </body>
    <script>
        function myFunction() {
    $('.ui.labeled.icon.sidebar').sidebar('toggle');}
    
    $('.ui.dropdown').dropdown();
     $('.custom').popup({popup : $('.custom.popup'),on    : 'click'});
    </script>
      @yield('script')
</html>