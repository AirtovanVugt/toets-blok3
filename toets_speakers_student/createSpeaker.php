<?php

include("includes/function.php");
$Merken = AllMerken();
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

<div class="mb-5 mt-2">
    <h1>Voeg een nieuwe speaker toe</h1>
    <form method="post" action="createhelp.php">
        <label>Naam: </label><br><input type="text" name="Naam" placeholder="Naam" required>
        <br><br>
        <label>Afbeelding: </label><br><input type="text" name="Afbeelding" placeholder="Naam van de afbeelding" required>
        <br><br>
        <label>Geluidkwaliteit: </label><br><input type="text" name="Geluidkwaliteit" placeholder="Geluidkwaliteit" required>
        <br><br>
        <label>Accu duur: </label><br><input type="text" name="Accuduur" placeholder="Accu duur" required>
        <br><br>
        <label>Waterdicht: </label><br><input type="text" name="Waterdicht" placeholder="Waterdicht" required>
        <br><br>
        <label>Bschrijving: </label><br><textarea type="text" name="Beschrijving" placeholder="Beschrijving" required></textarea>
        <br><br>
        <label>merk: </label><br>
        <select type="text" name="Merk" required>
        <?php
            foreach ($Merken as $key){
        ?>
            <option><?php echo $key["name"]; ?></option>
        <?php
            }
        ?>    
        </select>
        <br><br>
        <input type="submit" name="submit_create" value="Maak aan!">
    </form>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>