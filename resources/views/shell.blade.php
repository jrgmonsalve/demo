
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>ACME</title>
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/') }}">ACME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link"href="{{ route('login') }}">Login</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @else
                        

                        <li class="nav-item">
                            <a class="nav-link" href="/propietarios">Propietarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/conductors">Conductores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/vehiculos">Vehiculos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/reportes">Reportes</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                    @endif

                </ul>
            </div>
        </nav>
                <br>
                @yield('content')
                
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>