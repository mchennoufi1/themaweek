<?php

    
class Person
{
    public $name;
    private $age;
    protected $gender;
    public $isStudent;
    public $averageGrade;

    function __construct(string $name, int $age, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        echo "\n Nieuw Persoon-object aangemaakt";
        echo "\n De property naam is " . $this->name;
    }

    function __destruct()
    {
        echo "\nPersoon object $this->name wordt verwijderd";
    }

    function setGender(string $gender)
    {
        $this->gender = $gender;
    }

    function getGender()
    {
        return $this->gender;
    }

    function setName(string $name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setAge(int $age)
    {
        $this->age = $age;
    }

    function getAge()
    {
        return $this->age;
    }

    function setIsStudent(bool $value)
    {
        $this->isStudent = $value;
    }

    function getIsStudent()
    {
        return $this->isStudent;
    }

    function setAverageGrade(float $grade)
    {
        $this->averageGrade = $grade;
    }

    function getAverageGrade()
    {
        return $this->averageGrade;
    }

    function getGegevens()
    {
        $gegevens =
            "\n De gegevens van " . $this->name . "zijn: " .
            "\nLeeftijd: " . $this->age .
            "\nGeslacht: " . $this->gender .
            "\nIs student: " . ($this->isStudent ? "Ja" : "Nee") .
            "\nGemiddeld cijfer: " . $this->averageGrade;
        return $gegevens;
    }
}
