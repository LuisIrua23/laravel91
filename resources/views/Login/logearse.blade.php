<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear curso</h1>

    <form action="{{route('curso.store')}}" method="POST" enctype="multipart/form-data">
   
    @csrf
   
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        apellido:
        <br>
        <input type="text" name="apellido">
    </label>

    <label>
        email:
        <br>
        <input type="text" name="email">
    </label>
   
    <br>
   
    <button type="submit">Enviar Formulario:</button>
    </form>
   
</body>
</html>

Añade un comentario de clase…