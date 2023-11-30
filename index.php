<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Waldehardware</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
</head>

<body class="fondo">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Waldehardware</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#q">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#w">contactos</a>
        </li>
    </div>
  </div>
</nav>

    <div class="container mt-5" id="q">
        <div class="row">
    
            <?php
            require_once "conex.php";
    
    
            // Paso 2: Consultar los datos
            $consulta = "SELECT * FROM objetos";
            $resultado = mysqli_query($sql, $consulta);
    
            // Paso 3: Iterar sobre los resultados y generar tarjetas de Bootstrap
            while ($fila = mysqli_fetch_assoc($resultado)) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $fila['imagen']; ?>" id="pequeno" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" id="centrado"><?php echo $fila['producto']; ?></h5>
                            <h5 class="card-title" id="justificado"><?php echo $fila['detalle']; ?></h5>
                            <p class="card-text" id="derecha"><?php echo $fila['precio']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
    
            // Paso 4: Cerrar la conexión
            mysqli_close($sql);
            ?>
    
        </div>
    </div>
   
    <form class="formulario" id="w">
        <h2>contacto</h2>
        <div class="input-group" id="seba">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="inputs" placeholder="Nombre">
            <label for="phone">Telefono</label>
            <input type="tel" name="phone" id="phone"  class="inputs" placeholder="Telefono">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"  class="inputs" placeholder="Email">
    
            <textarea id="message" cols="30" rows="5" placeholder="Mensaje"></textarea>
            <input class="btn" type="submit" value="Enviar">
            
        </div>
    </form>

<footer>
    <h1>TEL:54 9 345 304-8423  ------ DIR:Estrada 1023 ------ LOC:Concordia</h1>
</footer>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>