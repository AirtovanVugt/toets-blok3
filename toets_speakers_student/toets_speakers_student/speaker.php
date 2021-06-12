<?php

include("includes/function.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
else{
    $id = 0;
}
    $onebox = OneBox($id);

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
        <h1>Bekijk hier -speaker-</h1>
        <div class="align-self-center">
            <a class="btn-lg btn-info text-white" href="updateSpeaker.php?id=<?= $onebox["id"]; ?>">update speaker</a>
            <a class="btn-lg btn-danger text-white" href="delete.php?id=<?php echo $onebox["id"]; ?>" onClick="javascript: return confirm('Weet je zeker dat je dit wilt verwijderen');">delete speaker</a>
        </div>
    </div>

    <div class="content mt-2">
        <div>
            <div>
                <div class="text-center border">
                    <img class="img-fluid p-1 Honderdvijftig" src="<?php echo $onebox["img"]; ?>"/>

                    <div class="border-bottom">
                        <strong>Naam: <?php echo $onebox["name"]; ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Geluidskwaliteit: <?php echo $onebox["soundquality"]; ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Accu duur: <?php echo $onebox["batterylife"]; ?></strong>
                    </div>
                    <div class="border-bottom">
                        <strong>Waterdicht: <?php echo $onebox["waterresistant"]; ?></strong>
                    </div>
                    <div>
                        <strong>Merk: <?php echo $onebox["Merk"]; ?></strong>
                    </div>
                </div>
            </div>
            <p class="card-text">
                <?php echo $onebox["description"]; ?>
            </p>
        </div>
    </div>
    <hr>
</div>

<?php include("includes/footer.php");

?>

</body>
</html>