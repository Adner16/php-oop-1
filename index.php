<?php


class Movies {
    public $Title;
    public $Year;
    public $Genre; 
    public $Price;
    public function setPrice(){
        if($Year <= 2005){
            $Price = '10€'
        } else $Price = '20€'
    }
    function __construct($Title, $Year,$Genre,$Price);
}

$Batman = new Movies('Batman', 2000, 'azione', );
$Batman=>title = 'Batman';
$Batman=>year = 2000;
$Batman=>genre = 'action';
$Batman=>Price = setPrice();

$Assassin = new Movies('The Assassin', 2005, 'horror', );
$Assassin=>title = 'The Assassin';
$Assassin=>year = 2005;
$Assassin=>genre = 'horror';
$Assassin=>Price = setPrice();

$Dragon = new Movies ('The Dragon', 2010, 'fantasy', );
$Dragon=>title = 'the Dragon';
$Dragon=>year = 2010;
$Dragon=>genre = 'fantasy';
$Dragon=>Price = setPrice();

echo foreach()

