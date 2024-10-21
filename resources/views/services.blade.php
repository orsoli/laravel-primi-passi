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
       {{-- Main  --}}
        <main>
            <div class="container">
                <h1 class="text-center py-4"> {{$title}} </h1>
                {{-- Services List  --}}
                <ol>
                    @foreach ($services as $service )
                        <li>
                                <a href="#"> {{$service}} </a>
                                <p>Descriptions ...</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </main>
    </body>
</html>
