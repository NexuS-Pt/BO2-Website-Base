<?php

$page_e_template = file_get_contents("templates-e/footer.tpl");

/* last thing */
$footer = str_replace(
	[
		""
	],
	[
		""
	],
	$page_e_template
);
