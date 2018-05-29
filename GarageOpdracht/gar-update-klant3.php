<html>
<head>
    <title>gar-update-klant3</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage update klant 3</h1>
        <p>klangegevens wijzigen in de tabel klant van de databse garage</p>
        <?php
        //klantgegevens uit het formulier halen
        $klantid = $_POST["klantidvak"];
        $klantnaam = $_POST["klantnaamvak"];
        $klantadres = $_POST["klantadresvak"];
        $klantpostcode = $_POST["klantpostcodevak"];
        $klantplaats = $_POST["klantplaatsvak"];

        //updaten klantgegevens
        require_once "gar-connect.php";

        $sql = $conn->prepare
        ("UPDATE klant SET klantnaam = :klantnaam, klantadres = :klantadres, klantpostcode = :klantpostcode, klantplaats = :klantplaats WHERE klantid = :klantid");

        //$sql->bindParam(":klantid", $klantid);
        //$sql->bindParam(":klantnaam", $klantnaam);
        //$sql->bindParam(":klantadres", $klantadres);
        //$sql->bindParam(":klantpostcode", $klantpostcode);
        //$sql->bindParam(":klantplaats", $klantlaats);
        //$sql->execute();

        $sql->execute([
            "klantid" => $klantid,
            "klantnaam" => $klantnaam,
            "klantadres" => $klantadres,
            "klantpostcode" => $klantpostcode,
            "klantplaats" => $klantplaats
        ]);

        echo "de klant is geweizigd. <br/>";
        echo "<a href='gar-menu.php'> terug naar het menu </a>";
        ?>
    </div>
</div>
</body>
</html>
