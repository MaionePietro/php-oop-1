<?php
class Movie{
    public $title;
    public $duration;

    function __construct($_title, $_duration){
        $this->title = $_title;
        $this->duration = $_duration;
    }
}