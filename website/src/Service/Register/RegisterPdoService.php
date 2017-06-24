<?php 

namespace desenn\Service\Register;

class RegisterPdoService implements RegisterService
{
	private $pdo;
	
	public function __construct(\PDO $pdo) {
		$this->pdo = $pdo;
	}
	
	public function register($username, $password) {
		$options = [
				'salt' => $username . $username . $username . $username,
		];
		$hash = password_hash($password, PASSWORD_BCRYPT, $options);
		
		$stmt = $this->pdo->prepare("SELECT * FROM user WHERE email=?");
		$stmt->bindValue(1, $username);
		$stmt->execute();
		
		if($stmt->rowCount() === 0){
			$stmt = $this->pdo->prepare("INSERT INTO user (email, password) VALUES(?, ?)");
			$stmt->bindValue(1, $username);
			$stmt->bindValue(2, $hash);
			$stmt->execute();
			session_regenerate_id();
			
			
			$stmt = $this->pdo->prepare("SELECT * FROM user WHERE email=?");
			$stmt->bindValue(1, $username);
			$user = $stmt->fetchObject();
			$_SESSION["is_admin"] = $user->is_admin;
			$_SESSION["user_id"] = $user->id;
			$_SESSION["email"] = $username;
		}
	}
}