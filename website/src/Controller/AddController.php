<?php

namespace desenn\Controller;

use desenn\SimpleTemplateEngine;
use desenn\Service\Add\AddService;

class AddController
{
	/**
	 * @var desenn\SimpleTemplateEngine Template engines to render output
	 */
	private $template;

	private $registerService;

	/**
	 * @param desenn\SimpleTemplateEngine
	 */
	public function __construct(SimpleTemplateEngine $template, AddService $addService)
	{
		$this->template = $template;
		$this->addService = $addService;
	}

	public function showAddSeries() {
		echo $this->template->render("addSeries.html.php");
	}
	
	public function showAddActors() {
		echo $this->template->render("addActors.html.php");
	}

	/*public function Add(array $data) {
		if(array_key_exists("email", $data)){
			echo $this->template->render("register.html.php",[
					"msg" => $data["EMail already taken"]
			]);
		}
		else {
			$this->registerService->register($data['email'], $data['pw']);
		}

	}*/
}

