<?php 

namespace desenn\Service\Login;
class LoginPdoService implements LoginService
{
	private $pdo;
	
	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function authenticate($username, $password)
	{
		$salt = $username;
		
		$saltHash = hash('sha256', $password, $salt);
		
		$stmt = $this->pdo->prepare("SELECT * FROM user WHERE email=? AND password=?");
		$stmt->bindValue(1, $username);
		$stmt->bindValue(2, $saltHash);
		$stmt->execute();
		 
		if(false){
			$_SESSION["admin"] = 1;
		}
		else{
			$_SESSION["admin"] = 1;
		}
		
		if($stmt->rowCount() === 1){
			$_SESSION["email"] = $username;
			return true;
		}
		else{
			return false;
		}
	}
	
	public function updatePW($username, $password)
	{
		$salt = $username;
		
		$saltHash = hash('sha256', $password, $salt);
		
		$stmt = $this->pdo->prepare("UPDATE user SET password=? WHERE email=?");
		$stmt->bindValue(1, $saltHash);
		$stmt->bindValue(2, $username);
		$stmt->execute();
			
		
			$_SESSION["email"] = $username;
	
	}
}
?>