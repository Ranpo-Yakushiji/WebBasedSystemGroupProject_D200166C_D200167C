<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Game Fact</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
                <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        
        <style>
            .nav-link{
                padding: 15px 70px;
                color: black;
                border-bottom: 4px solid transparent;
            }

            .nav-item{
                padding-left:10px;
                padding-right:10px;
            }

            .navbar-collapse {
                justify-content: flex-end;
            }

            .nav-link:hover{
                border-bottom: 4px solid 	#87cefa;
                transition: border-bottom 450ms ease-in;
            }

            .footer{
                background-color: #778899;
                padding:40px;
            }

            .search input.form-control[type=search]:focus:not([readonly]){
                
                border-bottom: 1px solid blue;
                box-shadow: 0 1px 0 0 #ce93d8;
            }

            .search input.form-control[type=search]{
                
                border:none;
                border-bottom: 1px solid silver;
                border-radius: 0;
            }

            .search input[type="search"]::placeholder{
                position: relative;
                right: 4px;

            }

        </style>
    </head>
    <body>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!--Navigation bar-->
    <nav class="navbar navbar-expand-md">
        <div class = "navbar-brand"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dice-3" viewBox="0 0 16 16">
  <path d="M13 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z"/>
  <path d="M5.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-4-4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>  Game Fact</div>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
               
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('games')}}">Game Recommendation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('developers')}}">Game Developer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/character')}}">Character</a>
                </li>
               
                @if (Route::has('login'))
                <li class="nav-item hidden fixed right">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout.perform')}}">Logout</a>
                </li>   
                @else
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item hidden fixed">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                        @endif
                 @endauth        
                </li>
                @endif
            
            </ul> 
            <!-- Search form -->
            <form class="form-inline d-flex justify-content-center md-form form-sm mt-0 search" action="{{route('search.game')}}" method="POST">
            @CSRF
            <i class="fas fa-search" aria-hidden="true"></i>
            <input class="form-control form-control-sm ml-3 w-75" type="search" placeholder="Search"
                aria-label="Search" name="keyword">
            </form>
            
        </div>
    </nav>
    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                    <p>Group Project D200166C and D200167C</p>
                    <p>All the images are referenced from the internet</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                </div>
            </div>
            <div class="footer-copyright text-center">© 2021 Copyright: GameFact.com</div>
        <div>
    </footer>
    </body>
    
</html>