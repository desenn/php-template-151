<?php

namespace desenn\Service\Add;
class AddPdoService implements AddService
{
	private $pdo;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function addSeries($name)
	{
		$stmt = $this->pdo->prepare("INSERT INTO series WHERE name=?");
		$stmt->bindValue(1, $name);
		$stmt->execute();
		$series = $stmt->fetchColumn();

		return $series;
	}

	public function addActor($lastname, $firstname)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM actor WHERE lastname=? AND firstname=?");
		$stmt->bindValue(1, $lastname);
		$stmt->bindValue(2, $firstname);
		$stmt->execute();
		$actors = $stmt->fetchColumn();

		return $actors;

	}
}
?>