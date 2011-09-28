<?php
/*
 *  Copyright (c) 2011  Rasmus Fuhse <fuhse@data-quest.de>
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU General Public License as
 *  published by the Free Software Foundation; either version 2 of
 *  the License, or (at your option) any later version.
 */

require_once dirname(__file__)."/lib/bootstrap.php";

$content = Template::summon(dirname(__file_)."/templates/tabulator.php")
	->render();

echo $template = Template::summon(dirname(__file__)."/templates/layout.php")
	->with("content", $content)
	->render();
