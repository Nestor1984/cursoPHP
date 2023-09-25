<?php

$txtNombre="";

if ($_POST) { // Si hay un envio
                 # (If ternario) : Si hay informacion en este txt asignaselo
    $txtNombre = ( isset($_POST['txtNombre']) )?$_POST['txtNombre']: ""; # isset( si hubo un envio )? asignalo: de lo contrario va estar vacio "";

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

    <?php } ?>

    <form action="35-ValoresDelInputText.php" method="post">

        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">

        <input type="submit" value="Enviar informacion">

    </form>
</body>
</html>