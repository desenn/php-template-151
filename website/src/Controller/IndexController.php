<?php

namespace desenn\Controller;

use desenn\SimpleTemplateEngine;

class IndexController 
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

  public function homepage() {
    echo "INDEX";
  }

  public function greet($name) {
  	echo $this->template->render("hello.html.php", ["name" => $name]);
  }
}
