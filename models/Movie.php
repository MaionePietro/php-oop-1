<?php
class Movie{
    public string $title;
    public int $duration;
    public string $genere;
    //public static $movieTypology = ["action", "fantasy", "motivational"];

    function __construct($_title, $_genere, $_duration){
        $this->title = $_title;
        $this->genere = $_genere;
        $this->duration = $_duration;
    }

    public function concatena(){
        $text ="$this->title, $this->duration, $this->genere";
        // $i = strlen($this->description);
        // if( $i < 10 ){
            // $text .= $this->$description;
        // }
        return $text;
    }
}