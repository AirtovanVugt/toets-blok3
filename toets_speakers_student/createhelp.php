<?php

include("includes/function.php");
create($_POST["Naam"], $_POST["Afbeelding"], $_POST["Geluidkwaliteit"], $_POST["Accuduur"], $_POST["Waterdicht"], $_POST["Beschrijving"], $_POST["Merk"]);

header("location: index.php?create=success");