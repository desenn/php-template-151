<?php

namespace desenn\Service\Actor;

interface ActorService
{
	public function addActor($lastname, $firstname, $birthday);
	public function getActor($id);
	public function searchActor($lastname, $firstname);
}

?>