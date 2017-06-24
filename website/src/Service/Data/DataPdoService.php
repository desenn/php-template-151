<?php

namespace desenn\Service\Data;
class DataPdoService implements DataService
{
	private $pdo;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function getSeries($id)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM series WHERE id=?");
		$stmt->bindValue(1, $id);
		$stmt->execute();
		$series = $stmt->fetchColumn();

		return $series;
	}

	public function getActor($id)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM actor WHERE id=?");
		$stmt->bindValue(1, $id);
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