<?php

namespace desenn\Service\Series;

interface SeriesService
{
	public function addSeries($name, $seasons, $episodes, $summary, $genre);
	public function getSeries($id);
	public function searchSeries($name);
}

?>