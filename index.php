<?php
require_once 'Something.php';

$something = new Something();

/*
// Prior PHP to v5.4
$results = $something->results();
echo $first = $results[0];

*/


// With PHP v5.4 and higher
echo $first = $something->results()[0];
?>