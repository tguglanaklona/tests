<?php

if (isset($_GET['xml'])) {

    $fp = fopen("./logjs.txt", "a");

    $post = $_GET['xml'];
    $text .= "\n" . str_repeat("=", 22) . "\n";

    fputs($fp, $text + $post + '|');
    fclose($fp);

}

?>