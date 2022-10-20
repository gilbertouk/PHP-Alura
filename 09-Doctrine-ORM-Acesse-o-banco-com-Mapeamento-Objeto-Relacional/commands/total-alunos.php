<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
//$repository = $entityManager->getRepository(Aluno::class);

$classeAluno = Aluno::class;
$dql = "SELECT COUNT(a) FROM $classeAluno a";
$query = $entityManager->createQuery($dql);
//$alunoList = $repository->findAll();
$totalAlunos = $query->getSingleScalarResult();

//echo "Total de alunos: " . count($alunoList);
echo "Total de alunos: " . $totalAlunos;