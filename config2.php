<?php 

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API 

$facebook = new \Facebook\Facebook([
  'app_id'      => '1433293860183714',
  'app_secret'     => '88885424900cebc1b9c852e544613dc2Reset',
  'default_graph_version'  => 'v2.10'
]);

?>
