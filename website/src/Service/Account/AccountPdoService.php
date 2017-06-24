<?php

namespace desenn\Service\Account;
class AccountPdoService implements AccountService
{
	private $pdo;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function showFavourites($name)
	{
		$stmt = $this->pdo->prepare("INSERT INTO series WHERE name=?");
		$stmt->bindValue(1, $name);
		$stmt->execute();
		$series = $stmt->fetchColumn();

		return $series;
	}

	public function getFavorites($username)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM favourites WHERE fk_user=?");
		$stmt->bindValue(1, $username);
		$stmt->execute();
		$favourites = $stmt->fetchColumn();
	
		return $favourites;
	
	}
	
	public function getFavorites($id)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM favourites WHERE fk_user=?");
		$stmt->bindValue(1, $username);
		$stmt->execute();
		$favourites = $stmt->fetchColumn();
	
	
	}
}
?>