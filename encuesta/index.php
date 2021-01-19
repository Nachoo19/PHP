<?php 
    include_once "includes/survey.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="#" method="post" class="form__encuesta">
    <?php
    $survey = new Survey();
    $showResults = false;
    if(isset($_POST["lenguaje"])){
        $showResults = true;
        $survey->setOptionSelected($_POST["lenguaje"]);
        $survey->vote();
    }

    echo $survey->getTotalVotes()
    ?>
        <h2>Cual es tu lenguaje de programacion favorito???</h2>
        <?php
            if($showResults){
                $lenguajes = $survey->showResults();

                echo "<h2>". $survey->getTotalVotes() . " votos totales</h2>";
                foreach($lenguajes as $lenguaje){
                    $porcentaje = $survey->getPorcentageVotes($lenguaje["votos"]);
                include("./vistas/vista_resultado.php"); 

                }
            }else {
                include("./vistas/vista_votacion.php");
            }
        ?>
        
    </form>
<?php
    ?>
</body>
</html>

















<!-- <?php
class Pedro {
    public $name;
    function set_name($name){
        $this->name = $name; 
    }
    function saludar_nombre (){
        return "Hola soy $this->name";
    }
}
$pedro = new Pedro();
$pedro->set_name("PEPE");
echo $pedro->saludar_nombre();
?> -->