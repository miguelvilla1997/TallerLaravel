<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>{{'hola'}}</h1>
        <form action="{{url('/archivos')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Nombre:</label><br>
            <input type="text" name="nombre"><br>
            <label for="">Archivo:</label><br>
            <input type="file" name="archivo"><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>     
