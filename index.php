<?php

$dir = dir(getcwd());

while (false !== ($filename = $dir->read())) {
    if (strpos($filename, '.zip') != false) {
        echo "<a href=" . $filename . ">" . $filename . "</a><br />";
    }
}
?>
