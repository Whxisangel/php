<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Dashboard</title>
</head>
<body>
<h2>Sesion Abierta</h2>
<p>
<?php
if(isset($_POST['nombre'])){
    $_SESSION['nombre'] = $_POST['nombre'];
    echo "Bienvenido:<b> " .$_POST['nombre']."<br>";
}else {
    if(isset($_SESSION['nombre'])){
        echo "Has iniciado Sesión Como: ".$_SESSION['nombre'];
    }else{
        //si la sesión expira
        echo "Acceso Restringido";
    }
}
?><p>
<br>
<p><a href="login.php">Ir a la pagina de inicial</a></p>
<br>
<p><a href='logout.php'>Cerrar sesión</a><p>
</body>
</html>
