<!-- template madre -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') :: Laboratorio de Control de Calidad</title>

</head>

<body>
  <header>
    <p>Valentin Balcarce S.A.</p>
    @yield('header')
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    @yield('footer')
  </footer>

</body>

</html>
</body>

</html>
