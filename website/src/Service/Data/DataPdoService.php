<?php

namespace desenn\Service\Data;
class DataPdoService implements DataService
{
	private $pdo;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function getSeries($name)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM series WHERE name=?");
		$stmt->bindValue(1, $name);
		$stmt->execute();
		$series = $stmt->fetchColumn();

		return $series;
	}

	public function getActor($lastname, $firstname)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM actor WHERE lastname=? AND firstname=?");
		$stmt->bindValue(1, $lastname);
		$stmt->bindValue(2, $firstname);
		$stmt->execute();
		$actors = $stmt->fetchColumn();

		return $actors;

	}
	public function getFavorites($username)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM favourites WHERE fk_user=?");
		$stmt->bindValue(1, $username);
		$stmt->execute();
		$favourites = $stmt->fetchColumn();

		return $favourites;

	}
}
?>