<?php

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