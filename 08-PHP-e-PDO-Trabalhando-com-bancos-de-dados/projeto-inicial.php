<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';
require_once 'src\Domain\Model\Student.php';

$student = new Student(
    null,
    'Gilberto Antonio',
    new \DateTimeImmutable('1991-06-15')
);

echo $student->age();