<html>
<head>
    <title>gar-read-klant</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style></style>
</head>
<body>
<div class="backgroundimg">

    <div class='results'>

        <h1>garage read klant</h1>
        <p>
            dit zijn alle gegevens uit de tabel klanten van de database garage.
        </p>

        <?php
        // tabel uitlezen en netjes afdrukken
        require_once "gar-connect.php";

        $sql = $conn->prepare("SELECT * FROM klant");

        $sql->execute();;
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
</div
</body>
</html>