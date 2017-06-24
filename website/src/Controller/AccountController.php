<?php

namespace desenn\Controller;

use desenn\SimpleTemplateEngine;
use desenn\Service\Account\AccountService;

class AccountController
{
	/**
	 * @var desenn\SimpleTemplateEngine Template engines to render output
	 */
	private $template;

	private $accountService;

	/**
	 * @param desenn\SimpleTemplateEngine
	 */
	public function __construct(SimpleTemplateEngine $template, AccountService $accountService)
	{
		$this->template = $template;
		$this->accountService = $accountService;
	}

	public function showAccount() {
		echo $this->template->render("account.html.php");
	}
	
	public function addFavourite($id) {
		$this->accountService->addFavourites($id);
	}

	/*public function Add(array $data) {
		if(array_key_exists("email", $data)){
		echo $this->template->render("register.html.php",[
		"msg" => $data["EMail already taken"]
		]);
		}
		else {
		$this->registerService->register($data['email'], $data['pw']);
		}

		}*/
}

