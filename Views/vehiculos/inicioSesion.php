<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 offset-2">

        <!-- Default form login -->
<form class="text-center border border-light p-5" action="index.php?c=vehiculos&a=ingresar" method="POST">

<p class="h4 mb-4">Inicia sesion</p>

<!-- User -->
<input type="text" class="form-control mb-4" required name="user" placeholder="Usuario">

<!-- Email -->
<input type="email" class="form-control mb-4" required name="email" placeholder="Correo electronico">

<!-- Password -->
<input type="password" class="form-control mb-4" required name="pass" placeholder="Contraseña">

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit">Iniciar sesion</button>

</form>
<!-- Default form login -->
            
        </div>
    </div>
</div>

</body>
</html>