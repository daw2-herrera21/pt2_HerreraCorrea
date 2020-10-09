<?php
    session_start();
    $_SESSION['user'] = 'Toni';
    $_SESSION['contra'] = 123;
    $_SESSION['location'] = 'Barcelona';
?>
<?php setcookie("cookie","ESTO ES UNA COOKIE!", time() + 3600, "/", "", 0);
?>
<?php
echo $_COOKIE["cookie"];
?>
    
<?php
date_default_timezone_set("Europe/Madrid");
echo("Son las ");
echo date("H");
echo(":");
echo date("i");
echo(" del dia ");
echo date("d");
echo (" del año ");
echo date("Y");
?>

<html>
  <head>
    <title>Directivas Variables</title>
  </head>
<body>
    <h1>Index</h1>
<a href="pagina2.php?nombre=Toni&edad=21">Link pagina2.php con variables "nombre" y "edad" usando el $_GET.<br></a>
<a href="pagina2.php">Link pagina2.php sin las variables "nombre" y "edad".<br></a>

<form method="POST"action="pagina2.php">
    Quieres acceder?<input type="text" name="opcion">
    <br>
    Usuario:<input type="text" name="usu">
    <br>
    Contraseña:<input type="password" name="pasw">
    <br>
    <input type="submit" value="Enviar formulario">

</form>

</body>
</html>