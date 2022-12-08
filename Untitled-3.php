<?php
class Person
{
    public $name, $age,$salery;


	public function setAge($age) 
	{ 
		if ($this->checkAge($age)) 
		{ 
		$this->age = $age; 
		} 
	} 

	public function getAge()
	{
		return $this->age;
	}

	private function checkAge($age)
	{
		return ($age >=1 && $age < 100); 
	}


}

$tom = new Person();
$tom->name="Том";
$tom->setAge(25);

$bob = new Person();
$bob->name="Боб";
$bob->setAge(26);

echo "Сумма возрастов: ".($tom->getAge()+$bob->getAge());
?>