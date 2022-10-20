<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunosRepository = $entityManager->getRepository(Aluno::class);

$debugStack = new \Doctrine\DBAL\Logging\DebugStack();
$entityManager->getConfiguration()->setSQLLogger($debugStack);


/**
 * @var Aluno[] $alunos
 */
$alunos = $alunosRepository->findAll();

foreach ($alunos as $aluno) {
    $telefones = $aluno->getTelefones()->map(function (Telefone $telefone) {
       return $telefone->getNumero();
    })->toArray();

    echo "ID: {$aluno->getId()}<br>";
    echo "Nome: {$aluno->getNome()} <br>";
    echo "Telefones: " . implode(", ", $telefones);
    echo "<br>";
    $cursos = $aluno->getCursos();

    foreach ($cursos as $curso) {
        echo "ID Curso: {$curso->getId()} <br>";
        echo "Curso: {$curso->getNome()} <br>";
    }

    echo "<br>";
}

echo "<pre>";
var_dump($debugStack);
echo "</pre>";