{{-- hello.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
</head>
<body>
    <h1>Hello World</h1>
    <h2>Angel Jael Martinez de Escobar Araiza</h2>
    <!-- Añade un botón que lleva a la ruta 'create' -->
    <a href="{{ route('hello.create') }}">Agregar Producto</a>
</body>
</html>
