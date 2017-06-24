<?php

namespace desenn\Service\Search;
class SearchPdoService implements SearchService
{
	private $pdo;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function searchSeries($name)
	{
		$stmt = $this->pdo->prepare("SELECT id FROM series WHERE name=?");
		$stmt->bindValue(1, $name);
		$stmt->execute();
		$series = $stmt->fetchColumn();

		return $series;
	}

	public function searchActor($lastname, $firstname)
	{
		$stmt = $this->pdo->prepare("SELECT id FROM actor WHERE lastname=? AND firstname=?");
		$stmt->bindValue(1, $lastname);
		$stmt->bindValue(2, $firstname);
		$stmt->execute();
		$actors = $stmt->fetchColumn();

		return $actors;

	}
}
?>