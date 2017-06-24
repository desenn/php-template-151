<?php

namespace desenn\Service\Account;
class AccountPdoService implements AccountService
{
	private $pdo;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function showFavourites($id)
	{
		$stmt = $this->pdo->prepare("INSERT INTO series WHERE name=?");
		$stmt->bindValue(1, $name);
		$stmt->execute();
		$series = $stmt->fetchColumn();

		return $series;
	}

	public function getFavorites($user_id)
	{
		$stmt = $this->pdo->prepare("SELECT id FROM favourites WHERE fk_user=?");
		$stmt->bindValue(1, $user_id);
		$stmt->execute();
		$favourites = $stmt->fetchAll();
	
		return $favourites;
	
	}
	
	public function addFavourites($id)
	{
		$stmt = $this->pdo->prepare("INSERT INTO favourites (fk_user, fk_series) VALUES (?, ?)");
		$stmt->bindValue(1, $_SESSION["user_id"]);
		$stmt->bindValue(2, $id);
		$stmt->execute();
	
	
	}
}
?>