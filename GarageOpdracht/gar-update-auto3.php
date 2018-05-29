<html>
<head>
    <title>gar-update-auto3</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage update auto 3</h1>
        <p>
            klantgegevens wijzigen in de tabel auto uit de database garage
        </p>
        <?php
        //autogegevens uit het formulier halen
        $autokenteken = $_POST["autokentekenvak"];
        $automerk = $_POST["automerkvak"];
        $autokmstand = $_POST["autokmstandvak"];
        $klantid = $_POST["klantidvak"];

        //updaten autogegevens
        require_once "gar-connect.php";

        $sql = $conn->prepare("UPDATE auto SET autokenteken = :autokenteken, automerk = :automerk, autokmstand = :autokmstand, klantid = :klantid WHERE autokenteken = :autokenteken");

        $sql->execute
        ([
            "autokenteken" => $autokenteken,
            "automerk" => $automerk,
            "autokmstand" => $autokmstand,
            "klantid" => $klantid
        ]);

        echo "de auto is geweizigd. <br/>";
        echo "<a href='gar-menu.php'></a>";
        ?>
    </div>
</div>
</body>
</html>
