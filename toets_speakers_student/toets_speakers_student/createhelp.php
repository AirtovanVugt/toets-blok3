<?php

include("includes/function.php");

create($_POST);

header("location: index.php?create=success");