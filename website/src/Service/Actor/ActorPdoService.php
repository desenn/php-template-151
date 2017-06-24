<?php

namespace desenn\Service\Actor;
class ActorPdoService implements ActorService
{
	private $pdo;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}



	public function addActor($lastname, $firstname, $birthday)
	{
		$stmt = $this->pdo->prepare("INSERT INTO actor (lastname, firstname, birthdate) VALUES (?, ?, NULL)");
		$stmt->bindValue(1, $lastname);
		$stmt->bindValue(2, $firstname);
		//$stmt->bindValue(3, $birthday);
		$stmt->execute();
		


	}
	
	public function getActor($id)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM actor WHERE id=?");
		$stmt->bindValue(1, $id);
		$stmt->execute();
		$actors = $stmt->fetchColumn();
	
		return $actors;
	
	}
	
	public function searchActor($lastname, $firstname)
	{
		$stmt = $this->pdo->prepare("SELECT id FROM actor WHERE lastname=? AND firstname=?");
		$stmt->bindValue(1, $lastname);
		$stmt->bindValue(2, $firstname);
		$stmt->execute();
		$actors = $stmt->fetchAll();
	
		return $actors;
		
	
	}
}
