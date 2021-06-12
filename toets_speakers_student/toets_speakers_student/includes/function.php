<?php

function openConn(){
	try{
	    $conn = new PDO('mysql:host=localhost;dbname=speakers', 'root', 'mysql');
	    return $conn;
	}

	catch(PDOException $e){
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
}

function AllBoxes(){
    $conn = openConn();
    $query = "SELECT * FROM speakers ORDER BY id";
    $result = $conn->prepare($query);
    $result->execute();
    $boxes = $result->fetchAll();
    return $boxes;
    $conn = null;
}

function AllMerken(){
    $conn = openConn();
    $query = "SELECT * FROM brand ORDER BY id";
    $result = $conn->prepare($query);
    $result->execute();
    $Merken = $result->fetchAll();
    return $Merken;
    $conn = null;
}

function OneBox($id){
    $conn = openConn();
    $query = $conn->prepare("SELECT * FROM speakers WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    $OneBox = $query->fetch();
    return $OneBox;
    $conn = null;
}

function delete($id){
    $conn = openConn();
    $query = $conn->prepare("DELETE FROM speakers WHERE id = :id");
    $query->execute([":id" => $id]);
    $conn = null;
}

function create($data){

    $conn = openConn();

    $query = $conn->prepare("INSERT INTO speakers (name, img, soundquality, batterylife, waterresistant, description, brandId, merk) VALUES (:BoxNaam, :Afbeelding, :Geluidkwaliteit, :Accuduur, :Waterdicht, :Beschrijving, 0, :Merk)");

    $query->execute([":BoxNaam" => $data["Naam"], ":Afbeelding" => $data["Afbeelding"], ":Geluidkwaliteit" => $data["Geluidkwaliteit"], ":Accuduur" => $data["Accuduur"], ":Waterdicht" => $data["Geluidkwaliteit"], ":Beschrijving" => $data["Beschrijving"], ":Merk" => $data["Merk"]]);

    $conn = null;
}


function update($data, $id){
    try {
        $conn = openConn();
        $query = $conn->prepare("UPDATE speakers SET name = :BoxNaam, img = :Afbeelding, soundquality = :Geluidkwaliteit, batterylife = :Accuduur, waterresistant = :Waterdicht, description = :Beschrijving, merk = :Merk  WHERE id = :id");

        $query->execute([":BoxNaam" => $data["Naam"], ":Afbeelding" => $data["Afbeelding"], ":Geluidkwaliteit" => $data["Geluidkwaliteit"], ":Accuduur" => $data["Accuduur"], ":Waterdicht" => $data["Waterdicht"], ":Beschrijving" => $data["Beschrijving"], ":Merk" => $data["Merk"], ":id" => $id]);

        $conn = null;
    } catch (PDOException $e) {
        echo "de database error: " . $e->getMessage();
    }
    
}