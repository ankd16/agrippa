<?php
/*
Config-file for Agrippa. Here you may change settings for the website.
*/

/*
Set the error-reporting.
*/
error_reporting(-1);            // Report all errors.
ini_set('display_errors', 1);   // Display all errors.
ini_set('output_buffering', 0);  // Do not buffer outputs, write directly.

/*
Define Agrippa-paths.
*/
define('AGRIPPA_INSTALL_PATH', __DIR__ . '/..');
define('AGRIPPA_THEME_PATH', AGRIPPA_INSTALL_PATH . "/theme/render.php");

/*
Include bootstrapping functions.
*/
include(AGRIPPA_INSTALL_PATH . '/src/bootstrap.php');

/*
Start the session.
*/
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
// session_start();

/*
Create the Agrippa-variable.
*/
$agrippa = array();

/*
Site-wide settings.
*/
$agrippa['lang']            = 'sv';
$agrippa['title_append']    = ' | En me-sida i oophp-kursen';

$agrippa['stylesheets']     = array("css/style.css");

$agrippa['header'] = <<<EOD
<img alt'ank-logga' src='img/ank-logga.jpg' />
<span class='site-title'>Andreas webbsida</span>
EOD;

$agrippa['navbar'] = array(
    'class' => 'nb-plain',
    'items' => array(
        'home'  => array('text'=>'Start',   'url'=>'me.php',  'title' => 'Start'),
        'redovisning'  => array('text'=>'Redovisning',   'url'=>'redovisning.php',   'title' => 'Redovisningar'),
        'source' => array('text'=>'Visa källkod', 'url'=>'source.php',  'title' => 'Källkod'),
    ),
    'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
        return true;
        }
    }
);

$agrippa['footer'] = "<p>Copyright 2016, Andreas &copy; </p>";
