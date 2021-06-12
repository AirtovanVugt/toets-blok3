<?php

include("includes/function.php");
$boxes = AllBoxes();

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Toets CRUD Blok 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<?php include("includes/header.php"); ?>

<div class="mb-5 mt-2">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier alle speakers <?php echo $boxes["name"]; ?></h1>
        <a class="btn-lg btn-primary text-white align-self-center" href="createSpeaker.php">Nieuwe speaker</a>
    </div>

    <?php
        foreach ($boxes as $key){
    ?>

    <div class="mt-2">
        <div class="card">
            <img class="card-img-top img-fluid Honderdvijftig" src="<?php echo $key["img"]; ?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?php echo $key["name"]; ?></h4>
                <p class="card-text">
                    <?php echo $key["description"]; ?>
                </p>
                <a href="speaker.php?id=<?php echo $key["id"]; ?>" class="btn btn-primary">Meer details</a>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>