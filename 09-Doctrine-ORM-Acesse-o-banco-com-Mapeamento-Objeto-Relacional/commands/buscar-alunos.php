<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList */
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "ID: {$aluno->getId()} - Nome: {$aluno->getNome()}  <br>";
}

echo "<p>";

$lethicia = $alunoRepository->find(4);
echo $lethicia->getNome();

echo "<p>";

$michelly = $alunoRepository->findOneBy([
    'nome' => 'Michelly Monica'
]);

var_dump($michelly);