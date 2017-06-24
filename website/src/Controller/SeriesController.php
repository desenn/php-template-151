<?php

namespace desenn\Controller;

use desenn\SimpleTemplateEngine;
use desenn\Service\Series\SeriesService;

class SeriesController
{
	/**
	 * @var desenn\SimpleTemplateEngine Template engines to render output
	 */
	private $template;

	private $seriesService;

	/**
	 * @param desenn\SimpleTemplateEngine
	 */
	public function __construct(SimpleTemplateEngine $template, SeriesService $seriesService)
	{
		$this->template = $template;
		$this->seriesService = $seriesService;
	}

	public function showAddSeries() {
		echo $this->template->render("addSeries.html.php");
	}

	

	public function AddSeries(array $data) {
		if(!array_key_exists("name", $data) OR !array_key_exists("seasons", $data) OR !array_key_exists("episodes", $data) OR !array_key_exists("summary", $data)){
			$this->showAddSeries();
			return;
		}
		$this->seriesService->addSeries($data['name'], $data['seasons'], $data['episodes'], $data['summary'], $data['genre']);
		echo $this->template->render("home.html.php");
	}
	
	public function displaySeries($id) {
		$series = $this->seriesService->getSeries($id);
		echo $this->template->render("seriesView.html.php",[
				"data" => $series
		]);
	}
	
	public function showSearch() {
		echo $this->template->render("search-series.html.php");
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
	
	public function SearchSeries(array $data){
		$series = $this->seriesService->searchSeries($data['search_s']);
		$this->displaySeries($series[0]['id']);
	}

	


}

