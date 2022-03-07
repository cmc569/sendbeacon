<?php
// $id = @file_get_contents('a.log');
// $id += 1;
file_put_contents('a.log', date("Y-m-d H:i:s ").print_r($_POST, true)."\n", FILE_APPEND);
?>