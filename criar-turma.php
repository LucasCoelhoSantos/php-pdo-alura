<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

// realizo processos de definição da turma

// inserir todos os alunos da turma ou nenhum se ocorrer erro
$connection->beginTransaction();

try {
    $aStudent = new Student(
        null, 
        'Aluno A', 
        new DateTimeImmutable('1991-01-01')
    );
    $studentRepository->save($aStudent);

    $bStudent = new Student(
        null, 
        'Aluno B', 
        new DateTimeImmutable('1992-02-02')
    );
    $studentRepository->save($bStudent);

    $connection->commit();
} catch (\PDOException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}
