<?php
class Person
{
    public $name, $age,$salery;
    function hellow(){

    }
}

$tom=new Person();
$tom->name="Том";
$tom->age=25;
$tom->salery=1000;

$bob=new Person();
$bob->name="Боб";
$bob->age=26;
$bob->salery=2000;

$Tsalery=$tom->salery;
$Bsalery=$bob->salery;
$Tage=$tom->age;
$Bage=$bob->age;

echo "Сумма зарплат: ".($tom->salery+$bob->salery)."<br>"."Сумма возрастов: ".($tom->age+$bob->age);
$tom->hellow();
?>
