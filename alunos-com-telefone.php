<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

/** @var Phone[] $studentList */
$studentList = $repository->studentsWithPhones();

echo $studentList[0]->phones()[0]->formattedPhone();
var_dump($studentList);
