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
	public function __construct(SimpleTemplateEngine $template, ActorService $actorService)
	{
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
	
	public function displayActors() {
		echo $this->template->render("addActors.html.php");
	}
	
	public function showSearch() {
		echo $this->template->render("search-actor.html.php");
	}
	
	/*public function Search(array $data) {
	 if(array_key_exists("email", $data)){
	 echo $this->template->render("search.html.php",[
	 "msg" => $data["EMail already taken"]
	 ]);
	 }
	 else {
	 $this->searchService->searchActor($data['email'], $data['pw']);
	 }
	
	 }*/
	
	
	
	public function SearchActor(array $data){
		$this->actorService->searchActor($data['search_a_f'], $data['search_a_l']);
	
	
	}


}

