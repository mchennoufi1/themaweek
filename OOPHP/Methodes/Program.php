<?php
include 'Person.php';

$umut = new Person("Umut", 18, "M");
$umut->setIsStudent(true);
$umut->setAverageGrade(7.5);
echo $umut->getGegevens();

$demirel = new Person("Demirel", 19, "F");
$demirel->setIsStudent(true);
$demirel->setAverageGrade(8.2);
echo $demirel->getGegevens();

$mohammed = new Person("Mohammed", 19, "M");
$mohammed->setIsStudent(true);
$mohammed->setAverageGrade(7.2);
echo $mohammed->getGegevens();

$thamara = new Person("Thamara", 18, "F");
$thamara->setIsStudent(true);
$thamara->setAverageGrade(7.2);
echo $thamara->getGegevens();

$jan = new Person("Jan", 21, "M");
$jan->setIsStudent(true);
$jan->setAverageGrade(7.2);
echo $jan->getGegevens();

$tim = new Person("Tim", 26, "M");
$tim->setIsStudent(true);
$tim->setAverageGrade(7.2);
echo $tim->getGegevens();

?>

