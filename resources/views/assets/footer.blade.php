<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    <title>Inicio</title>
</head>
<body>
    <footer class="py-3 my-4" style="background-color: #e8bb87">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="{{route('main')}}" class="nav-link px-2 text-muted">Inicio</a></li>
          <li class="nav-item"><a href="{{route('store')}}" class="nav-link px-2 text-muted">Tienda</a></li>
          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link px-2 text-muted">Contacto</a></li>
        </ul>
        <p class="text-center text-muted">© 2023 Hefestos S.A. de C.V.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
