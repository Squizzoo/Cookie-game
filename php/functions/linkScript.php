<?php
function bootstrapScr($dir) {
	$script = '';
	$link = glob($dir.'/*.js');

	for ($i = 0; $i < count($link); $i++) {
		$script .= '<script src="'.$link[$i].'"></script>';
	}
	return $script;
}
 ?>
