<?php
class Movie{
    public string $title;
    public int $duration;
    public string $genere;
    public string $description;
    //public static $movieTypology = ["action", "fantasy", "motivational"];

    function __construct($_title, $_duration, $_description){
        $this->title = $_title;
        $this->duration = $_duration;
        $this->$description = $_description;
    }

    public function concatena(){
        $text ="$this->title, $this->duration";
        if(strlen($this->description) < 10 ){
            $text .= $this->$description;
        }
        return $text;
    }
}