<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <header class="p-5 border-b bg-white shadow flex justify-between">
    <h1 class="text-3xl font-black">Devstagram</h1>
    <nav>
      <a href="/">LOGIN</a>
      <a href="{{route('register')}}">CREAR CUENTA</a>
    </nav>
  </header>

  <main class="container mx-auto mt-10">
    <h2 class="font-bold text-black text-3xl text-center">
      @yield('titulo')
    </h2>
    @yield('contenido')
  </main>

  <footer class="text-center py-5 text-gray-500 font-bold uppercase">
    Devstagram - Todos los derechos reservados {{date("Y")}}
  </footer>
  
</body>
</html>