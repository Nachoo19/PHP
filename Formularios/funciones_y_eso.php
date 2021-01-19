<header>
    <style>
        *{
            margin: 0;
            padding: 0;
            background: #032532;
            color: #fff;
            font-size: 24px;
            font-family: Helvetica;
    }
    </style>
</header>
<!-- <?php 
    echo '<h1 style="color: red;">Hola gente</h1>';

?> -->
<!-- Funciones para Strings --> 
<!-- Todas las funciones empiezan con str -->
<!-- <?php
//Longitud
$mensaje = "Holaa, niaaa se hacia el que recien llegaba <br>";
echo $mensaje;
//Numero de caracteres
echo strlen($mensaje) . "Numero de caracteres";

echo "<br>";
//Numero de palabras
echo str_word_count($mensaje) . "Numero de palabras";

echo "<br>";

//Reversa
echo strrev($mensaje) . "---Reversa";

echo "<br>";

//Encontrar texto
echo strpos($mensaje, "el") . "Lugar del texto";

echo "<br>";

//Reemplazar texto

echo str_replace("niaaa", "Pelotudo", $mensaje) . " Texto reemplazado";
echo "<br>";

//Convertir a minusculas
echo strtolower($mensaje);

echo "<br>";

//Convertir a mayus
echo strtoupper($mensaje);
echo "<br>";

//Comparar cadenas

echo strcmp("c","a");
echo "<br>";

//Sustraer cadena

echo substr($mensaje, 12);
echo "<br>";
//Remover espacios en blanco
echo trim("            Hola         soy            Marcos");

?> -->




<!-- Arreglos -->
<!-- 
<?php
 $frutas = ["Banana", "Manzana", "Mandarina", "Frutilla"];

 print_r($frutas);
echo "<br>";

// echo "<h1 style='color: orange;'>$frutas[0]</h1>";
for($i = 0; $i < count($frutas); $i++){
    if($frutas[$i] === "Mandarina"){
        echo "<h1 style='color: orange;'>$frutas[$i] :(</h1>";
        echo "<br>";  
    }else {
        echo "<h1 style='color: orange;'>$frutas[$i] :)</h1>";
        echo "<br>";
    }
}
?> -->