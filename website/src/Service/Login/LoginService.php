<?php 

namespace desenn\Service\Login;

interface LoginService
{
	public function authenticate($username, $password);
	public function updatePW($username, $password);
}

?>