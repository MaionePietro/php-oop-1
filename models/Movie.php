<?php
class Movie{
    public string $title;
    public int $duration;
    public string $typology;
    public static $movieTypologys = ["action", "fantasy", "motivational"];

    function __construct($_title, $_duration, $_typology){
        $this->title = $_title;
        $this->duration = $_duration;
        $this->typology = $_typology;
    }

    public function getTitolo(){
        return $this->title;
    }

    public function getInfo(){
        return $this->duration . "<br>" . $this->typology;
    }
}