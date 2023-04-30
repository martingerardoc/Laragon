<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutas</title>
</head>
<body>
    <h1>Calendario Academico</h1>
    <form action="/action_page.php">
     <label for="lname">Inicio y finalizacion de cursada por cuatrimestre:</label><br>

        <button href="{{route('calendario')}}" type="button">CALENDARIO</button>
     
        <a href="{{route('calendario')}}">calendario</a>

    <h1>Carreras</h1>
    <form action="/action_page.php">
     <label for="lname">Oferta academica:</label><br>
    <button onclick="{{route('calendario')}}">carreras</button>
    <a href="{{route('carreras')}}">carreras</a>

    <button class="button button1" href="{{route('calendario')}}" >Calendario button</button>
    <button onclick="{{route('calendario')}}">calendario</button>
    <button class="button button2">Blue</button>
    <style>
        .button {
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        }

        .button1 {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
        }

        .button1:hover {
        background-color: #4CAF50;
        color: white;
        }

        .button2 {
        background-color: white;
        color: black;
        border: 2px solid #008CBA;
        }

        .button2:hover {
        background-color: #008CBA;
        color: white;
        }

    </style>
</form>
</body>
</html>