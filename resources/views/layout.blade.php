<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/Accueil">Accueil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/Nouveautes">Nouveautés</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/BDtheque">BDthèque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Admin">Mon espace</a>
                </li>
            </ul>
            <form action="" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Recherche rapide..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
            </form>
        </div>
    </nav>

    <div class="container">
        @yield('content')

        
    </div>

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>