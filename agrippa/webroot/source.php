<?php
/*
This is an Agrippa-pagecontroller.
*/
// Including the config-file, which initializes the $agrippa-variable to its default values.
include(__DIR__.'/config.php');

// Page-specific agrippa-values
$agrippa['title'] = "Källkoden";

$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));

$agrippa['main'] = "<h1>Visa källkod</h1>\n" . $source->View();

// Rendering phase:
include(AGRIPPA_THEME_PATH);
