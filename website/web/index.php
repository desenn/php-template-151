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
		if($_SERVER['REQUEST_METHOD'] === 'GET'){
			$cnt->showForgotPW();
		}
		else{
			$cnt->forgotPW($_POST);
		}
		break;
		
	case "/search-series":
		$cnt = $factory->getSeriesController();
		$cnt2 = $factory->getAccountController();
		if($_SERVER['REQUEST_METHOD'] === 'GET'){
			$cnt->showSearch();
		}
		else{
			if($_POST['favourite'] === "Add to favourites"){
				$cnt2->addFavourite($_POST["id"]);
				$cnt->showSearch();
			}else {
				$cnt->SearchSeries($_POST);
			}
		}
		break;
		
	case "/search-actor":
		$cnt = $factory->getActorController();
		if($_SERVER['REQUEST_METHOD'] === 'GET'){
			$cnt->showSearch();
		}
		else{
			$cnt->SearchActor($_POST);
		}		
		break;
		
	case "/account":
		$cnt = $factory->getAccountController();
		$cnt->showAccount();
		break;
		
	case "/add-series":
		$cnt = $factory->getSeriesController();
		if($_SERVER['REQUEST_METHOD'] === 'GET') {
			$cnt->showAddSeries();
		}
		else {
			$cnt->AddSeries($_POST);
		}
		break;
		
	case "/add-actors":
		$cnt = $factory->getActorController();
		if($_SERVER['REQUEST_METHOD'] === 'GET') {
			$cnt->showAddActors();
		}
		else {
			$cnt->AddActors($_POST);
		}
		break;
		
	default:
		$matches = [];
		if(preg_match("|^/hello/(.+)$|", $_SERVER["REQUEST_URI"], $matches)) {
			$factory->getIndexController()->greet($matches[1]);
			break;
		}
		echo "Not Found";
}

