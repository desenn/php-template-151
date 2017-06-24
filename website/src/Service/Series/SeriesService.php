<?php

namespace desenn\Service\Series;

interface SeriesService
{
	public function addSeries($name, $seasons, $episodes, $summary, $genere);
	public function getSeries($name);
	public function searchSeries($name);
}

?>