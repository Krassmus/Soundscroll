<?php

require_once dirname(__file__)."/lib/bootstrap.php";

$content = Template::summon(dirname(__file_)."/templates/tabulator.php")
	->render();

echo $template = Template::summon(dirname(__file__)."/templates/layout.php")
	->with("content", $content)
	->render();
