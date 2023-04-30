<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Noticias</a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @section('menu')
              <li class="nav-item active">
                <a class="nav-link0" aria-current="page" href="{{route('noticias.index')}}">Noticias<span class="sr-only">(current)</span></a>
              </li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="">{{__('noticias.nueva')}}</a>
              </li>
              @show
            </ul>
          </div>
        </div>
      </nav>
      <div class="jumbotron">
        <div class="container">
            @yield('content')
        </div>
      </div>
</body>
</html>