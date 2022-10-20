<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

//$alunoRepository = $entityManager->getRepository(Aluno::class);

//** @var Aluno[] $alunoList */
//$alunoList = $alunoRepository->findAll();

$dql = 'SELECT aluno FROM Alura\\Doctrine\\Entity\\Aluno aluno WHERE aluno.id=1 OR aluno.nome=\'Michelly Monica\' ORDER BY aluno.id';
$query = $entityManager->createQuery($dql);
$alunoList = $query->getResult();

foreach ($alunoList as $aluno) {
    $telefones = $aluno->getTelefones()->map(function (Telefone $telefone) {
        return $telefone->getNumero();
    })
    ->toArray();
    echo "ID: {$aluno->getId()}\n<br>Nome: {$aluno->getNome()}\n<br>";
    echo "Telefones: " . implode(' / ', $telefones);

    echo "\n\n <br><br>";

}