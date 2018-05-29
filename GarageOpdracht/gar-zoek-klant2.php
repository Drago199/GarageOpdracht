<html>
<head>
    <title>gar-read-klant</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage zoek op klantid 2</h1>
        <p>
            op klantid gegevens zoeken uit de tabel klanten van de databse garage
        </p>

        <?php
        // klantid uit het formulier halem
        $klantid = $_POST["klantidvak"];

        //klantgevens uit de tabel halen
        require_once "gar-connect.php";

        $sql = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid");
        $sql->execute(["klantid" => $klantid]);

        //klantgegevens laten zien
        echo "<table>";
        foreach ($sql as $rij) {
            echo "<tr>";
            echo "<td>" . $rij["klantid"] . "</td>";
            echo "<td>" . $rij["klantnaam"] . "</td>";
            echo "<td>" . $rij["klantadres"] . "</td>";
            echo "<td>" . $rij["klantpostcode"] . "</td>";
            echo "<td>" . $rij["klantplaats"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href='gar-menu.php'> terug naar het menu</a>";
        ?>
    </div>
</div>
</body>
</html>
