<html>
<head>
    <title>gar-delete-klant2</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage delete klant 2</h1>
        <p>
            op klantid gegevens zoeken uit de tabel klanten van de databsee garage zodat ze verijderd kunnen worden.
        </p>
        <?php
        //klantid uit het formuier halen
        $klantid = $_POST["klantidvak"];

        //klantgegevens uit het formulier halen
        require_once "gar-connect.php";

        $klanten = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid");
        $klanten->execute(["klantid" => $klantid]);

        //klantgegevens laten zien
        echo "<table>";
        foreach ($klanten as $klant) {
            echo "<tr>";
            echo "<td>" . $klant["klantid"] . "</td>";
            echo "<td>" . $klant["klantnaam"] . "</td>";
            echo "<td>" . $klant["klantadres"] . "</td>";
            echo "<td>" . $klant["klantpostcode"] . "</td>";
            echo "<td>" . $klant["klantplaats"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<form action='gar-delete-klant3.php' method='post'>";
        //klantid mag niet meer aangepast worden
        echo "<input type='hidden' name='klantidvak' value='$klantid'>";
        //waarde 0 doorgeven als er niet gechecked wordt
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<input type='checkbox' name='verwijdervak' value='1'>";
        echo "verwijder deze klant. <br/>";
        echo "<input type='submit'>";
        echo "</form>";

        ?>
    </div>
</div>
</body>
</html>
