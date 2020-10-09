<?php
SESSION_START();
?>

<?php echo "Mi nombre es: " . $_GET["nombre"]; echo "<br> Mi edad es: " . $_GET["edad"];?>

<?php 
    $variable = isset($_POST['opcion']) ? $_POST['opcion']:"NULL option";
    $variable1 = isset($_POST['usu']) ? $_POST['usu']:"NULL username ";
    $variable2 = isset($_POST['pasw']) ? $_POST['pasw']:"NULL password";
    echo "<br>Has elegido la opcion que $variable, tu nombre es $variable1, y tu contraseña es $variable2 .";


?>

<html>
    <head>
        <title>Pagina2</title>
    </head>
    <body>
        <h3>Variable SESSION tipo nombre: <?php echo $_SESSION['user'] ?> </h3>
        <h3>Variable SESSION tipo contraseña: <?php echo $_SESSION['contra'] ?> </h3>
        <h3>Variable SESSION tipo localización: <?php echo $_SESSION['location'] ?> </h3>
    </body>

</html>