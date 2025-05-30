<?php

// || - OR
// && - AND

if (!isset($_POST["age"]) || !isset($_POST["name"]) ) {
    header("Location: index.php");
}

if ($_POST["age"] < 0) {
    header("Location: index.php");
}

echo $_POST["name"];
echo $_POST["age"];