<?php
class Movie{
    public $name;
    public $year_of_release;
    public $category;
    public $director;

    // costruttore
    function __construct($_name,$_year_of_release, $_category,$_director){
        $this->name = $_name;
        $this->year_of_release = $_year_of_release;
        $this->category = $_category;
        $this->director = $_director;
    }

    //funzione setter name
    public function setName( $Name ){
        $this->name = $Name;
    }

    // metodi
    function printFilm(){
        echo "$this->name è un film del $this->year_of_release di genere ";
        foreach($this->category as $key => $value){
            echo "$value ";
          }
        echo " diretto da $this->director <br>";
    }

}
?>