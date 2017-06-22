<?php

namespace desenn\Service\Search;

interface SearchService
{
	public function searchSeries($name);
	public function searchActor($lastname, $firstname);
}

?>