<?php
$text = $_POST["textarea"];
$matches = [];

$count = preg_match_all('/\b\w{1,3}\b/', $text, $matches);
echo "there is $count words shorter 4 letters\n"
?>