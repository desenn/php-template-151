<?php

namespace desenn\Service\Series;

interface SeriesService
{
	public function addSeries($name);
	public function getSeries($name);
	public function searchSeries($name);
}

?>