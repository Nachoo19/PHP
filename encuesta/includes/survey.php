<?php
    include_once "db.php";
    class Survey extends DB{

    private $totalVotes;
    private $optionSelected;

    public function setOptionSelected($option){
        $this->optionSelected = $option;
    }
    public function getOptionSelected(){
        return $this->optionSelected;
    }

    public function vote(){
        $query = $this->connect()->prepare('UPDATE lenguajes SET votos = votos + 1 WHERE lenguaje = :lenguaje');
        $query->execute(['lenguaje' => $this->optionSelected]);
    }

    public function showResults (){ 
        return $this->connect()->query('SELECT * FROM lenguajes');
    }

    public function getTotalVotes(){
        $query = $this->connect()->query('SELECT SUM(votos) AS votos_totales FROM lenguajes');
        $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->votos_totales; 
        return $this->totalVotes;
    }
    public function getPorcentageVotes($votes){
        return round($votes / $this->totalVotes * 100, 0);
    }

}
?>