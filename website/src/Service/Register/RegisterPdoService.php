<?php 

namespace desenn\Service\Register;
class RegisterPdoService implements RegisterService
{
	private $pdo;
	
	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function register($username, $password)
	{
		$salt = $username;
		
		$saltHash = hash('sha256', $password, $salt);
		
		$stmt = $this->pdo->prepare("INSERT INTO user (email, password) VALUES(?, ?)");
		$stmt->bindValue(1, $username);
		$stmt->bindValue(2, $saltHash);
		$stmt->execute();
			
		$_SESSION["email"] = $username;

	}
		
}
?>