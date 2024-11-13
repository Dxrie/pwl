<?php
include "func.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $deleteStatus = delete($id);

    if ($deleteStatus >= 1) {
        header("location: index.php");
    }
}
