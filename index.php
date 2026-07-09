
<?php



require "./assets/funciones.php";


saludar(); //devuelve un echo con "Hola" aquí, donde llamo a la función.

echo "<br>";





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


// switch case (como un if anidado para más opciones)

$dia = 1;

switch ($dia) {

    case 1:
        echo "Lunes";
        break;

    case 2:
        echo "Martes";
        break;

    default:
        echo "Otro";

}

echo "<br>";

// un switch pero más moderno con el match
echo match ($dia) {

    1 => "Lunes",
    2 => "Martes",
    default => "Otro"
} . "<br>";


// iteradores while

$i=1;

while($i <= 10){

    echo $i."<br>";

    $i++;

}

echo "<br>";

// do while
$i=1;

do{

    echo $i ."<br>";

    $i++;

}while($i<=10);


echo "<br>";


// for
for($i=1 ;$i<=10; $i++){

    echo $i ."<br>";

}

echo "<br>";


// array normal y foreach para recorrerlo. Un array normal son valores dentro de la memoria de un contenedor, indexados en posiciones. Podemos recorrerlos a través de sus posiciones.

$colores=["Rojo","Azul","Verde"];

foreach($colores as $color){

    echo $color . "<br>";

}

echo $colores[1] . "<br>";



// arrays asociativos. contienen clave y valor asociado. Podemos recorrer los items del array asociativo a través de sus claves

$persona=[
    "nombre"=>"Igor",
    "edad"=>40,
    "Animes"=>["Naruto", "Bleach", "Dragon Ball"]
];

echo $persona["nombre"] . "<br>"; //Igor

echo $persona["Animes"][0] . "<br>"; //Naruto



// Funciones: objetivo poder reutilizar el código desde diferentes sitios
function saludar(){
    echo "Hola";
}


// función con parámetros y tipada
function sumar(int $a, int $b): int{
    return $a + $b;
}

echo sumar(2, 5) . "<br>"; // 7


// la función sumar2 la traigo desde otro fichero php, el cual está incluided arriba.
echo sumar2(2,5.2) . "<br>"; // 7,2


// ---------------------------
// Ejericios de la clase 89

echo "Ejercicios de la clase 89: <br>";

// ejercicio 1
$minombre = "Igor Aranaz";
echo "Mi nombre es: " . $minombre;

// ejercicio 2
$num1 = 5;
$num2 = 10;

$resultadoSuma = $num1 + $num2;
$resultadoResta = $num1 - $num2;
$resultadoMulti = $num1 * $num2;
$resultadoDivi = $num1 / $num2;

// ejercicio 3
$edad=24;

if($edad >= 18){
    $comentarioEdad = "Es mayor de edad";
}else{
    $comentarioEdad = "Es menor de edad";
}

// ejercicio 4 y 5 directamente abajo en el html

// ejercicio 6

$ciudades = ["Donostia", "Bilbao", "Gasteiz", "Iruña", "Baiona"];

// ejercicio 7

$persona = 
[
    "nombre"    =>  "Igor",
    "apellidos" =>  "Aranaz Pastor",
    "telefono"  =>  "628749350",
    "edad"      =>  46

];



// ejercicio 8
echo "<br>";

echo calcularMayor(45, 45);

function calcularMayor(int|float $n1, int|float $n2): string{
    if($n1 > $n2){
        return "El numero $n1 es mayor que $n2";
    }elseif($n1 < $n2){
        return "El numero $n2 es mayor que $n1";
    }else{
        return "Los números son iguales";
    }
}



// ejercicio 9


echo "<br>";
$costeSinIva = 14589;
echo "El el precio con IVA de $costeSinIva € es: " . calcularIva($costeSinIva) . "€";

function calcularIva(int $precio){
        $iva = (21 / 100) + 1;
        return $precio * $iva;
}


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
        table{
            width: 500px;
        }
        tr, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <!-- aquí , lo primero serán todos los echo que ejecute en el php de arriba -->

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

    <h2>Ejercicios de la clase 89</h2>

    <p>1) Este es mi nombre: <?= $minombre ?></p>

    <p>2) hacer operaciones matemáticas</p>
    <p>los números son el 5 y el 10</p>
    <ul>
        <li>Suma: <?= $resultadoSuma ?></li>
        <li>resta: <?= $resultadoResta ?></li>
        <li>Multiplicación: <?= $resultadoMulti ?></li>
        <li>División: <?= $resultadoDivi ?></li>
    </ul>

    <p>3) Mostrar mensaje en función de la edad (<?= $edad ?> años)</p>
    <p><?= $comentarioEdad ?></p>

    <p>4) Ejercicio de itereción</p>

    <?php

    for($i=1; $i<=20; $i++){
       echo <<<HTML
        <p>$i</p>    
        HTML; 
    };
    
    ?>

    <p>5) Ejercicio de itereción sólo con números pares</p>

    <?php

    for($i=1; $i<=20; $i++){

        if($i % 2 == 0){
            echo <<<HTML
            <p>$i</p>    
            HTML;
        }        
    };
    
    ?>


    <p>6) Mostrar ciudades del array</p>

    <table>
        <tr>
            <td>Numero</td>
            <td>Ciudad</td>
        </tr>
        <?php
        $num = 1;
        foreach($ciudades as $ciudad){

            echo 
            <<<HTML
            <tr>
                <td>$num</td>
                <td>$ciudad</td>
            </tr>
            HTML;
            $num++;
        }        
        ?>        
    </table>

    <p>Ejercicio 7</p>
    <table>
        <tr>
            <th>Tipo</th>
            <th>valor</th>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?= $persona["nombre"] ?></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><?= $persona["apellidos"] ?></td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td><?= $persona["telefono"] ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?= $persona["edad"] ?></td>
        </tr>
    </table>



    
    
    

 
        
   

    <div class="espacio">
        <?php
        saludar(); //devuelve un echo con "Hola" aquí, donde llamo a la función.
        ?>
    </div>
    
</body>
</html>