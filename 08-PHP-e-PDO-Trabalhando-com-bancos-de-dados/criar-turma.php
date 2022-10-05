<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

// realizo o processo de definicao da turma

$connection->beginTransaction();

$aStudent = new Student(
    null,
    'Nico Steppat',
    new DateTimeImmutable('1985-05-01'),
);
$studentRepository->save($aStudent);

$anotherStudent = new Student(
    null,
    'Sergio Lopes',
    new DateTimeImmutable('1985-05-01'),
);
$studentRepository->save($anotherStudent);

// inserir os alunos da turma

$connection->commit();

$connection->rollBack();