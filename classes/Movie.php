<?php


class Movie {

    public $film= [
        "title"=> "",
        "country"=> "",
        "vote"=> "",
        "year"=> "",
    ];
    
    function __construct($movieData){
        if(isset($movieData["title"])){
            $this->film["title"] = $movieData["title"];
        }
        if(isset($movieData["country"])){
            $this->film["country"] = $movieData["country"];
        }
        if(isset($movieData["vote"])){
            $this->film["vote"] = $movieData["vote"];
        }
        if(isset($movieData["year"])){
            $this->film["year"] = $movieData["year"];
        }
    }
        
    public function getMovie(){
        return $this->film["title"]. "<br>". $this->film["country"]. "<br>". $this->film["vote"]. "<br>". $this->film["year"];
    }
    
}