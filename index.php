<?php

$text = "lorem [mndc] ipsum [yes]";

preg_match_all("/\[([^\]]*)\]/", $text, $matches);

print_r($matches);

?>
