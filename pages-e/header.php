<?php
	$page_e_template = file_get_contents("./templates-e/header.html");

	/* last thing */
	$header = str_replace( array(), array($header, $footer), $page_e_template);