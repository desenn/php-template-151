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
		$options = [
				'salt' => $username . $username . $username . $username,
		];
		
		$hash = password_hash($password, PASSWORD_BCRYPT, $options);
		
		$stmt = $this->pdo->prepare("SELECT * FROM user WHERE email=? AND password=?");
		$stmt->bindValue(1, $username);
		$stmt->bindValue(2, $hash);
		$stmt->execute();
		
		if($stmt->rowCount() === 1){
			session_regenerate_id();
			$user = $stmt->fetchObject();
			
			$_SESSION["is_admin"] = $user->is_admin;
			$_SESSION["user_id"] = $user->id;
			$_SESSION["email"] = $username;
			return true;
		}
		else{
			return false;
		}
	}
	
	public function updatePW($username, $password)
	{
		$options = [
				'salt' => $username . $username . $username . $username,
		];
		
		$hash = password_hash($password, PASSWORD_BCRYPT, $options);
		
		$stmt = $this->pdo->prepare("UPDATE user SET password=? WHERE email=?");
		$stmt->bindValue(1, $hash);
		$stmt->bindValue(2, $username);
		$stmt->execute();
			
		session_regenerate_id();
		$user = $stmt->fetchObject();
		
		$_SESSION["is_admin"] = $user->is_admin;
		
		$_SESSION["user_id"] = $user->id;
		$_SESSION["email"] = $username;
		
		
		
		
		
	
	}
}
