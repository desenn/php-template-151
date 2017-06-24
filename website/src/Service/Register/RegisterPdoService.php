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
		
		$options = [
				'salt' => $username . $username . $username . $username,
		];
		
		$hash = password_hash($password, PASSWORD_BCRYPT, $options);
		
		
		$stmt = $this->pdo->prepare("INSERT INTO user (email, password) VALUES(?, ?)");
		$stmt->bindValue(1, $username);
		$stmt->bindValue(2, $hash);
		$stmt->execute();
		
		
		session_regenerate_id();
		$user = $stmt->fetchAll();
		
		if($user[0]["is_admin"] === 1){
			$_SESSION["admin"] = 1;
		}
		else{
			$_SESSION["admin"] = 0;
		}
		
		
		
		
		
		$_SESSION["email"] = $username;
		$_SESSION["user_id"] = $user[0]["id"];

	}
		
}