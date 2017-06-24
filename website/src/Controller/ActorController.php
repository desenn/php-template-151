<?php

namespace desenn\Controller;

use desenn\SimpleTemplateEngine;
use desenn\Service\Actor\ActorService;

class ActorController
{
	/**
	 * @var desenn\SimpleTemplateEngine Template engines to render output
	 */
	
	private $template;
	private $actorService;

	/**
	 * @param desenn\SimpleTemplateEngine
	 */
	
	public function __construct(SimpleTemplateEngine $template, ActorService $actorService) {
		$this->template = $template;
		$this->actorService = $actorService;
	}

	public function showAddActors() {
		echo $this->template->render("addActors.html.php");
	}

	public function AddActors(array $data) {
		if(!array_key_exists("firstname", $data) OR !array_key_exists("lastname", $data)){
			$this->showAddActors();
			return;
		}
		$this->actorService->addActor($data['lastname'], $data['firstname'], $data['birthday']);
		echo $this->template->render("home.html.php");
	}
	
	public function displayActors($id) {
		$actor = $this->actorService->getActor($id);
		echo $this->template->render("actorView.html.php",[
				"data" => $actor
		]);
	}
	
	public function showSearch() {
		echo $this->template->render("search-actor.html.php");
	}
	
	public function SearchActor(array $data) {
		$actor = $this->actorService->searchActor($data['search_a_l'], $data['search_a_f']);
		$this->displayActors($actor[0]['id']);
	}
}

