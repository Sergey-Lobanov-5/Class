<?php
class Person
{
    public $name, $age;
    function hellow(){
echo "Hellow"."<br>";
    }
}

$tom=new Person();
$tom->name="Том";
$tom->age=35;
$personName=$tom->name;
$personAge=$tom->age;
echo "Имя:".$personName."<br>"."Возраст:".$personAge."<br>";
$tom->hellow();
?>