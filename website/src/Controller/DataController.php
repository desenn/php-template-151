<?php

namespace desenn\Controller;

use desenn\SimpleTemplateEngine;
use desenn\Service\Data\DataService;

class DataController
{
	/**
	 * @var desenn\SimpleTemplateEngine Template engines to render output
	 */
	private $template;

	private $dataService;

	/**
	 * @param desenn\SimpleTemplateEngine
	 */
	public function __construct(SimpleTemplateEngine $template, DataService $dataService)
	{
		$this->template = $template;
		$this->dataService = $dataService;
	}

	public function displaySeries($name) {
		$this->dataService->getSeries($name);
		echo $this->template->render("addSeries.html.php",[
		"msg" => $data["EMail already taken"]
		]);
	}

	public function displayActors() {
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

