<?php

$connection = new mysqli('localhost', 'root', '', 'armashop');

if (!$connection) {
    die(mysqli_error($connection));
}
