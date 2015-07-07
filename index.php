<table border="1">
    <tr>
        <th>Distribúcia</th>
        <th>Dátum vytvorenia</th>
    </tr>
<?php

$dir = dir(getcwd());

while (false !== ($filename = $dir->read())) {
    if (strpos($filename, '.zip') != false) {
        echo "<tr><td><a href=" . $filename . ">" . $filename . "</a></td><td>" . date ("F d Y H:i:s.", filemtime($filename)) . "</td></tr>";
    }
}
?>
</table>
