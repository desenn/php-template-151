<?php

namespace desenn\Service\Series;
class SeriesPdoService implements SeriesService
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

	public function getSeries($id)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM series WHERE id=?");
		$stmt->bindValue(1, $id);
		$stmt->execute();
		$series = $stmt->fetchColumn();
	
		return $series;
	}
	
	public function searchSeries($name)
	{
		$stmt = $this->pdo->prepare("SELECT id FROM series WHERE name=?");
		$stmt->bindValue(1, $name);
		$stmt->execute();
		$series = $stmt->fetchColumn();
	
		return $series;
	}
}
