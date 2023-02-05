<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
   <div class="container">
    <dov class="row">
        <div class="cart">
            <form action="/inicio" method="POST">
                @csrf
                USUARIO: <br>
                <input type="text" name="usuario" id="" placeholder="ingrese un usuario" required> <br>
                CONTRASEÑA: <br>
                <input type="password" name="clave" id="" placeholder="ingrese su contrseña" required> <br>
                <br>
                <button class="btn btn-success" type="submit" >INGRESAR</button>
            </form>
            <br>
            @if (isset($mensaje) )
                        <div class="alert alert-danger">
                            <p>{{ $mensaje }}</p>
                        </div>
                    @endif
        </div>
    </dov>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>
