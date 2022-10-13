<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador: </title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>

    <div class="card-body" style="text-align:center; ">
        <nav>
            <ul style="word-spacing: 50pt">
                <a href="/menu">Menu</a>
                <a href="/mostrarEquip">Equips</a>
                <a href="/mostrarJugador">Jugadors</a>
                <a href="/consultarOptions">Buscador</a>
                <a href="/editar">Editar</a>
            </ul>
        </nav>
    </div>
    <br>

    <div class="col-lg-2 col-lg-offset-2" style="margin: 0 auto;">


        <form class="form-inline">

            <input name="dorsal" class="form-control mr-sm-2" type="search" placeholder="Buscar dorsals" aria-label="Search">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>

        
    </div>
  
<h2 style="text-align:center; margin-top:20px;" >Jugadors</h2>
<br></br>
<div class="estilos" style="text-align:center; margin-top:10px; margin-bottom:20px;">
@foreach($listado as $query)
    <tr>
        <td>
            <br>
                <strong>Nom del jugador:</strong>
                    {{ $query->nombre }}
                <strong> Pais de naixement:</strong> 
                    {{ $query->nacionalidad }} 
                <strong> Dorsal:</strong> 
                    {{ $query->dorsal }} 
            </br> 
        </td>
    </tr>
    
@endforeach
</div>
{{ $listado->links() }}
</body>
</html>