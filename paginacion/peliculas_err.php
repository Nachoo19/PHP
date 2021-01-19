<?php

include_once 'db.php';

class Peliculas extends DB{
    private $paginaActual;
    private $totalPaginas;
    private $nResultados;
    private $resultadosPorPagina;
    private $indice;
    private $error = false;

    function __construct($nPorPaginas){
        parent::__construct();
        $this->resultadosPorPagina = $nPorPaginas;
        $this->indice = 0;
        $this->paginaActual = 1;

    }
    function calcularPaginas(){
        $query = $this->connect()->query('SELECT COUNT(*) AS total FROM pelicula');
        $this->nResultados = $query->fetch(PDO::FETCH_OBJ)->total;
        $this->totalPaginas = $this->nResultados / $this->resultadosPorPagina;

        if(isset($_GET["pagina"])){
            // Validar que pagina sea un numero
            if(is_numeric($_GET["pagina"]) ){
            // Validar que pagina sea mayor o igual a 1 y menor o igual a totalPaginas
                if($_GET["pagina"] >= 1 && $_GET["pagina"] <= $this->totalPaginas){
                    $this->paginaActual = $_GET["pagina"];
                    $this->indice = ($this->paginaActual - 1)*($this->resultadosPorPagina);
                }else{
                    // confirmar error
                    echo "No existe esa pagina";
                    $this->error = true;
                }
            }else {
                echo "Error al mostrar la pagina";
                $this->error = true;

            }
            
        }
    }
    function mostrarPaginas(){
        $actual = '';
        echo "<ul>";

        for($i=0; $i < $this->totalPaginas; $i++){
            if(($i + 1) == $this->paginaActual){
                $actual = ' class="actual" ';
            }else{
                $actual = '';
            }
            echo '<li><a ' .$actual . 'href="?pagina='. ($i + 1). '">'. ($i + 1) . '</a></li>';
        }
        echo "</ul>";
    }
    function mostrarPeliculas(){
        if(!$this->error){
            $query = $this->connect()->prepare("SELECT*FROM pelicula LIMIT :pos, :n");
            $query->execute(["pos" => $this->indice, "n" => $this->resultadosPorPagina]);
            foreach($query as $pelicula){
                include "vista-pelicula.php";
            }
        }else{

        }
    }
    
}

?>