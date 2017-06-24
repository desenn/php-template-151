<?php

namespace desenn\Service\Account;

interface AccountService
{
	public function showFavourites($id);
	public function getFavorites($user_id);
	public function addFavourites($id); 
}

?>