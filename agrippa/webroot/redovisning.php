<?php
/*
This is an Agrippa-pagecontroller.
*/
// Including the config-file, which initializes the $agrippa-variable to its default values.
include(__DIR__.'/config.php');

// Page-specific agrippa-values
$agrippa['title'] = "Redovisning";

$agrippa['main'] = <<<EOD
<h1>Redovisningar</h1>

<h2>Kmom01</h2>
<p>Text här till redovisning.</p>

<h2>Kmom02</h2>
<p>Text här till redovisning.</p>

<h2>Kmom03</h2>
<p>Text här till redovisning.</p>

<h2>Kmom04</h2>
<p>Text här till redovisning.</p>

<h2>Kmom05</h2>
<p>Text här till redovisning.</p>

<h2>Kmom06</h2>
<p>Text här till redovisning.</p>

<h2>Kmom07-10</h2>
<p>Text här till redovisning.</p>
EOD;

// Rendering phase:
include(AGRIPPA_THEME_PATH);
