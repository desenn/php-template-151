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
		$stmt = $this->pdo->prepare("SELECT * FROM user WHERE email=? AND password=?");
		$stmt->bindValue(1, $username);
		$stmt->bindValue(2, $password);
		$stmt->execute();
		 
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
		$stmt = $this->pdo->prepare("UPDATE user SET password=? WHERE email=?");
		$stmt->bindValue(1, $password);
		$stmt->bindValue(2, $username);
		$stmt->execute();
			
		
			$_SESSION["email"] = $username;
	
	}
}
?>