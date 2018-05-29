<html>
<head>
    <title>gar-read-auto</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">

        <h1>garage read auto 1</h1>

        <p>
            dit zijn alle gegevens uit de tabel auto van de database garage.
        </p>

        <?php
        //tabel uitlezen en netjes afdrukken
        require_once "gar-connect.php";

        $sql = $conn->prepare("SELECT autokenteken, automerk, autokmstand, klantid FROM auto");
        $sql->execute();

        echo "<table>";
        foreach ($sql as $rij) {
            echo "<tr>";
            echo "<td>" . $rij["autokenteken"] . "</td>";
            echo "<td>" . $rij["automerk"] . "</td>";
            echo "<td>" . $rij["autokmstand"] . "</td>";
            echo "<td>" . $rij["klantid"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href='gar-menu.php'></a>";
        ?>
    </div>
</div>
</body>
</html>
