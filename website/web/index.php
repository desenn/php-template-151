<?php
session_start();

require_once("../vendor/autoload.php");

$factory = desenn\Factory::createFromIniFile(__DIR__ . "/../config.ini");



switch($_SERVER["REQUEST_URI"]) {
	case "/":
		$cnt = $factory->getIndexController();
		$cnt->homepage();
		break;
	case "/login":
		$cnt = $factory->getLoginController();
		if($_SERVER['REQUEST_METHOD'] === 'GET'){
			$cnt->showLogin();
		}
		else{
			$cnt->Login($_POST);
		}
		break;
	case "/logout":
		$cnt = $factory->getLoginController();
		$cnt->Logout();
		break;
	case "/register":
		$cnt = $factory->getRegisterController();
		if($_SERVER['REQUEST_METHOD'] === 'GET'){
			$cnt->showRegister();
		}
		else{
			$cnt->Register($_POST);
		}
		break;
	case "/change-pw":
		$cnt = $factory->getLoginController();
		
		break;
	default:
		$matches = [];
		if(preg_match("|^/hello/(.+)$|", $_SERVER["REQUEST_URI"], $matches)) {
			$factory->getIndexController()->greet($matches[1]);
			break;
		}
		echo "Not Found";
}

