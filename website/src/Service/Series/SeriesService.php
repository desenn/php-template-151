<?php

namespace desenn\Service\Series;

interface SeriesService
{
	public function addSeries($name, $seasons, $episodes, $summary, $genre);
	public function getSeries($name);
	public function searchSeries($name);
}

?>