<?php

namespace desenn\Service\Series;
class SeriesPdoService implements SeriesService
{
	private $pdo;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function addSeries($name, $seasons, $episodes, $summary, $genre)
	{
		$stmt = $this->pdo->prepare("INSERT INTO series (name, seasons, episodes, summary, genre) VALUES (?, ?, ?, ?, ?)");
		$stmt->bindValue(1, $name);
		$stmt->bindValue(2, $seasons);
		$stmt->bindValue(3, $episodes);
		$stmt->bindValue(4, $summary);
		$stmt->bindValue(5, $genre);
		$stmt->execute();
		
		
	}

	public function getSeries($id)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM series WHERE id=?");
		$stmt->bindValue(1, $id);
		$stmt->execute();
		$series = $stmt->fetchAll();
	
		return $series;
	}
	
	public function searchSeries($name)
	{
		$stmt = $this->pdo->prepare("SELECT id FROM series WHERE name=?");
		$stmt->bindValue(1, $name);
		$stmt->execute();
		$series = $stmt->fetchAll();
	
		return $series;
	}
}
