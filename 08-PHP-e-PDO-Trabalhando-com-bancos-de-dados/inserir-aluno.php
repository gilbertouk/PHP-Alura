<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor\autoload.php';

$pdo = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($pdo);


$pdo->beginTransaction();

try {
    $student = new Student(
        null,
        'Gilberto Antonio',
        new DateTimeImmutable('1991-01-01')
    );
    $studentRepository->save($student);
    $pdo->commit();

} catch (\PDOException $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->errorInfo[2];
    $pdo->rollBack();
}
/**
 *
 * $sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
 * $statement = $pdo->prepare($sqlInsert);
 * $statement->bindValue(':name', $student->name());
 * $statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
 * $statement->execute();
 *
 */

if ($studentRepository->save($student)) {
    echo "Aluno incluido.";
}
