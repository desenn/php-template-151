<?php

namespace desenn\Controller;

use desenn\SimpleTemplateEngine;
use desenn\Service\Register\RegisterService;

class RegisterController
{
	/**
	 * @var desenn\SimpleTemplateEngine Template engines to render output
	 */
	private $template;

	private $registerService;

	/**
	 * @param desenn\SimpleTemplateEngine
	 */
	public function __construct(SimpleTemplateEngine $template, RegisterService $registerService)
	{
		$this->template = $template;
		$this->registerService = $registerService;
	}

	public function showRegister() {
		echo $this->template->render("register.html.php");
	}

	public function Register(array $data) {
		if( !array_key_exists("email", $data) || !array_key_exists("pw", $data)){
			echo $this->template->render("register.html.php",[
					"msg" => "Ungültige Anfrage"
			]);
			return;
		}
		
		$this->registerService->register($data['email'], $data['pw']);
		echo $this->template->render("home.html.php");

	}
}

