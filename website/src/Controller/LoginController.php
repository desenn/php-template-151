<?php

namespace desenn\Controller;

use desenn\SimpleTemplateEngine;

class LoginController 
{
  /**
   * @var desenn\SimpleTemplateEngine Template engines to render output
   */
  private $template;
  
  /**
   * @param desenn\SimpleTemplateEngine
   */
  public function __construct(SimpleTemplateEngine $template)
  {
     $this->template = $template;
  }

  public function showLogin() {
    echo $this->template->render("login.html.php");
  }

  
}
