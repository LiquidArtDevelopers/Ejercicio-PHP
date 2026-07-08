
<?php
// este código se ejecuta en el servidor antes de cargar el html en cliente
// aquí dentro puede ir código php

// variables y operaciones matemáticas
$mivariable = "adios";
$num1 = 2;
$num2 = 5;
$resultado = ($num1 * $num2) + 50;

// concatenaciones
$nombre = "Igor";
$apellido = "Aranaz";

// UN COMENTARIO RANDOM

$nombreCompleto = $nombre . " - " . $apellido;

$texto = "Hola me llamo $nombre $apellido, y soy vuestro profe.";

$texto2 = 'Al ser comillas simples, no puedo meter las variables dentro de este string; estoy obligado a concatenar el valor de la variable $nombre: ' . $nombre . ' fuera del string para poder imprimirla';

// Con php podemos insertar etiquetas html (estructura html) donde queramos, no sólo texto o valores
$boton = '<a href="#" class="boton">Hola Soy un boton</a>';

/* esto
es
un comentario
de
bloque
 */

// esto es un comentario de línea

# otro comentario de línea


//  Constantes en php (van sin el $)
// una forma de definirla con valor
define("IVA", 21);
// otra forma de declararla con valor
const IVA2 = 10;

// incrementales
$contador = 5;
$contador++;

// condicionales
if($contador >= 5){
    $mensaje = "Es igual o mayor que 5 ($contador)";
}else{
    $mensaje = "Es menor que 5 ($contador)";
}

// comparadores y Operadores lógicos

$edad = null;
$edad = "40";

if($edad === 30){
    echo "su edad es 30 <br>";
}

if($edad !== 30){
    echo "NO es igual a 30 por su valor <br>";
}

// operadores
 
if(($edad >= 30 && $contador >= 5) || $contador === 6){
    echo "Se cumplen alguna de las condiciones <br>";
}

// condicionales elseif
$nota = 3;

if($nota >= 5){
    echo "Aprobado <br>";
}elseif($nota < 5 && $nota != null){
    echo "Suspenso <br>";
}else{
    echo "No presentado <br>";
}


// condicional antiguo y moderno para operaciones simples
if ($edad >= 18) {
    $mensaje = "Mayor";
} else {
    $mensaje = "Menor";
}
echo $mensaje ."<br>";

// alternativa moderna
$mensaje = $edad >= 18 
    ? "Mayor" 
    : "Menor";

echo $mensaje ."<br>";


// Variables query param obtenidas de la URL a través de "url?nombre=xxx"
if(isset($_GET['nombre']) && isset($_GET['apellido'])){
    $nombreRecogido = $_GET['nombre'];
    $apellidoRecogido = $_GET['apellido'];    
}

// Alternativa Null Coalescing

// $nombreRecogido = $_GET['nombre'] ?? $_GET['nombre'];
// $apellidoRecogido = $_GET['apellido'] ?? $_GET['apellido'];




?>

<!-- fuera de las etiquetas phpo, va código html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }
        body{
            display: flex;
            flex-direction: column;
            row-gap: 1rem;
            padding: 3rem;
        }
        .boton{
            background-color: red;
            color: white;
            padding: 0.5rem 2rem;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.1rem;
            text-decoration: none;
            border-radius: 4px;
        }
        .contenedor{
            width: 100%;
            padding: 2rem;
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
        }
        .espacio{
            height: 200px;
        }
    </style>
</head>
<body>

    <h1> <?php echo $nombreCompleto ?> </h1>

    <p>Resultado: <?= $resultado ?></p>

    <p><?= $texto ?></p>
    <p><?= $texto2 ?></p>

    <?= $boton ?>

    <p>IVA normal: <?= IVA ?></p>
    <p>IVA gasolina: <?= IVA2 ?></p>
    <p><?= $contador ?></p>
    <p>Mensaje: <?= $mensaje ?></p>

    <div class="contenedor" id="zonaBotones">
        <a href="/?nombre=Igor&apellido=Aranaz#zonaBotones" class="boton">Igor Aranaz</a>
        <a href="/?nombre=Erika&apellido=De Santiago#zonaBotones" class="boton">Erika De Santiago</a>
        <a href="/?nombre=Niko&apellido=Mezkiritz#zonaBotones" class="boton">Niko Mezkiritz</a>
        <a href="/?nombre=Arkadi&apellido=Krutius#zonaBotones" class="boton">Arkadi Krutius</a>
        <a href="/?nombre=Ekaterina&apellido=Goncharova#zonaBotones" class="boton">Ekaterina Goncharova</a>
        <a href="/?nombre=Mauricio&apellido=Mahecha#zonaBotones" class="boton">Mauricio Mahecha</a>
        <a href="/?nombre=Fabian&apellido=Mongrut#zonaBotones" class="boton">Fabian Mongrut</a>
        <a href="/?nombre=Noelia&apellido=Valverde#zonaBotones" class="boton">Noelia Valverde</a>
    </div>


    <?php
    // Condicionar el html desde el propio php allí donde toque en el html
    if(isset($nombreRecogido) && isset($apellidoRecogido)){

        // HEREDOC: forma moderna de escribir html dentro de php para visualizarlo y trabajarlo como si fuese html directamente
        $mensaje = <<<HTML
        <p>Nombre seleccionado: El nombre es $nombreRecogido $apellidoRecogido</p>
        <p>dasdsa</p>
    
        HTML;
        echo $mensaje;

        // fiorma echo habitual (antiguo) de asignar un echo a un html desde php
        echo "<p>Nombre seleccionado: El nombre es $nombreRecogido $apellidoRecogido</p>";

    }
    ?>

    <!-- Condicionar html desde php  -->
    <?php
    if(isset($nombreRecogido) && isset($apellidoRecogido)){
    ?>
        <p>Nombre seleccionado: El nombre es <?= $nombreRecogido . " " . $apellidoRecogido?> </p>
    <?php
    }
    ?>
        
   

    <div class="espacio"></div>
    
</body>
</html>