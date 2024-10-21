<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Orsol Filaj">
        <meta name="description" content="{{$title}}">

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- Bootstrap  --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        {{-- Header  --}}
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
                <a class="navbar-brand text-success" href="/home">{{$logo}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @foreach ($navBarList as $navBar)
                        <li class="nav-item">
                            <a class="nav-link" href="http://{{$localhost}}{{strtolower($navBar)}}">{{$navBar}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <form class="form-inline d-flex my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
       </header>
       {{-- Main  --}}
        <main>
            <div class="container">
                <h1 class="text-center py-4"> {{$title}} </h1>
                <h5> {{$sectionTitle}}: </h5>
                <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">
                    @foreach ($progLangsList as $language)
                    <div class="col">
                        <div class="card shadow">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"> {{$language}} </h5>
                                <p class="card-text">Programiming Language</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
        </main>
    </body>
</html>
