<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1{
            color: blue;
        }
        title{
            color: chocolate;
        }
      
    </style>
</head>
<body>
    <h1>Correo electronico </h1>
    <p> Este es el primer correo que enviare por Laravel </p>
    <p><strong>Nombre</strong>{{$contacto['name']}}</p>
    <p><strong>Nombre</strong>{{$contacto['correo']}}</p>
    <p><strong>Nombre</strong>{{$contacto['mensaje']}}</p>    

</body>
</html>