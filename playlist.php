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

$letter = $_REQUEST['letter'];
if (strlen($letter) > 1) {
	$letter = $letter[0];
}
if (file_exists(dirname(__file__)."/music/".$letter)) {
	$handle = opendir(dirname(__file__)."/music/".$letter);
	$list = array();
    while (false !== ($file = readdir($handle))) {
        if (stripos($file, ".ogg") !== false) {
            $list[] = "music/".$letter."/".$file;
        }
    }
    shuffle($list);
	$output = array('list' => $list);
	if (file_exists(dirname(__file__)."/music/".$letter."/info.txt")) {
		$output['title'] = file_get_contents(dirname(__file__)."/music/".$letter."/info.txt");
	} else {
		$output['title'] = "";
	}
	if (file_exists(dirname(__file__)."/music/".$letter."/info.png")) {
		$output['picture'] = "music/".$letter."/info.png";
	} else {
		$output['picture'] = "";
	}
	echo json_encode($output);
}