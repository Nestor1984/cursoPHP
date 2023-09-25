<?php

$txtNombre="";

$rdgLenguaje="";

if ($_POST) { // Si hay un envio
                 # (If ternario) : Si hay informacion en este txt asignaselo
    $txtNombre = ( isset($_POST['txtNombre']) )?$_POST['txtNombre']: ""; # isset( si hubo un envio )? asignalo: de lo contrario va estar vacio "";
    $rdgLenguaje = ( isset($_POST['lenguaje']) )?$_POST['lenguaje']: "";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php if($_POST){ ?> <!-- Si hay un envio muestra este mensaje-->

    <strong> Hola </strong>: <?php echo $txtNombre; ?>
    <br>
    <strong>Tu lenguaje es: </strong> <?php echo $rdgLenguaje; ?>

    <?php } ?>

    <form action="36-ValoresDelInputRadio.php" method="post">

        Nombre:<br>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br>

        ¿Te gusta?:<br>           <!--if ternario($rdgLenguaje == "php")?"imprime checked":"de lo contrario dejalo vacio"; -->
        <br>php : <input type="radio" <?php echo ($rdgLenguaje == "php")?"checked":""; ?> name="lenguaje" value="php" id=""> <br>
        <br>html : <input type="radio"<?php echo ($rdgLenguaje == "html")?"checked":""; ?> name="lenguaje" value="html" id=""> <br>
        <br>css : <input type="radio" <?php echo ($rdgLenguaje == "css")?"checked":""; ?> name="lenguaje" value="css" id=""> <br>

        <input type="submit" value="Enviar informacion">

    </form>
</body>
</html>