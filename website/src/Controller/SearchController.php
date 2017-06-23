<?php

namespace desenn\Controller;

use desenn\SimpleTemplateEngine;
use desenn\Service\Search\SearchService;

class SearchController
{
	/**
	 * @var desenn\SimpleTemplateEngine Template engines to render output
	 */
	private $template;

	private $searchService;

	/**
	 * @param desenn\SimpleTemplateEngine
	 */
	public function __construct(SimpleTemplateEngine $template, SearchService $searchService)
	{
		$this->template = $template;
		$this->searchService = $searchService;
	}

	public function showSearch() {
		echo $this->template->render("search.html.php");
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
	
	public function SearchSeries(){
		
	}
	
	public function SearchActor(){
	
	}

}



