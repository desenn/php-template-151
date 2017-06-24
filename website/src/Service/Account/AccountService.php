<?php

namespace desenn\Service\Account;

interface AccountService
{
	public function showFavourites($name);
	public function getFavorites($username);
	public function addFavourites($id); 
}

?>