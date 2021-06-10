<?php

include("includes/function.php");


update($_POST, $_GET["id"]);

header("location: index.php?update=success");