<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('sendGrid.sendGrid') }}" method="GET">
        @csrf
        <!-- Resto de los campos del formulario -->
        Ingrese un mensaje
        <input type="text" name="mensaje" id="mensaje" >
        <button type="submit">Enviar Correo</button>
    </form>
</body>
</html>