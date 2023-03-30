<?php
class Movie{
    public $title;
    public int $duration;

    public static $movieTypology = ["action", "fantasy", "motivational"];

    function __construct($_title, $_duration){
        $this->title = $_title;
        $this->duration = $_duration;
    }
}