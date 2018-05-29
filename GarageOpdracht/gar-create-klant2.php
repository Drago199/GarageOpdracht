<html>
<head>
    <title>gar-create-klant2</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage create klant 2</h1>

        <p>
            een klant toevoegen aan het tabel klant in de database garage
        </p>
        <?php
        // klantgegevens uit het formulier halen
        $klantid = NULL; //komt nier uit het formulier (autoincrement)
        $klantnaam = $_POST['klantnaamvak'];
        $klantadres = $_POST["klantadresvak"];
        $klantpostcode = $_POST["klantpostcodevak"];
        $klantplaats = $_POST["klantplaatsvak"];

        // klantgegevens invoeren in tabel
        require_once "gar-connect.php";

        $sql = $conn->prepare("INSERT INTO klant VALUES (:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");

        //$sql->bindParam(":klantid", $klantid);
        //$sql->bindParam(":klantnaam", $klantnaam);
        //$sql->bindParam(":klantadres", $klantadres);
        //$sql->bindParam(":klantpostcode", $klantpostcode);
        //$sql->bindParam(":klantplaats", $klantlaats);


        $sql->execute([
            "klantid" => $klantid,
            "klantnaam" => $klantnaam,
            "klantadres" => $klantadres,
            "klantpostcode" => $klantpostcode,
            "klantplaats" => $klantplaats
        ]);

        echo "de klant is toegevoegd <br/>";
        echo "<a href='gar-menu.php'> terug naar het menu</a>";
        ?>
    </div>
</div>
</body>
</html>
