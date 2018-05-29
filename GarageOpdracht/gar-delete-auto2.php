<html>
<head>
    <title>gar-delete-auto2</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage delete auto 2</h1>
        <p>
            op kenteken gegevens zoeken uit de tabel auto van de databsee garage zodat ze verwijderd kunnen worden.
        </p>
        <?php
        //kenteken uit het formuier halen
        $autokenteken = $_POST["autokentekenvak"];

        //autogegevens uit het formulier halen
        require_once "gar-connect.php";

        $autos = $conn->prepare("SELECT autokenteken, automerk, autokmstand, klantid FROM auto WHERE autokenteken = :autokenteken");
        $autos->execute(["autokenteken" => $autokenteken]);

        //autogegevens laten zien
        echo "<table>";
        foreach ($autos as $auto) {
            echo "<tr>";
            echo "<td>" . $auto["autokenteken"] . "</td>";
            echo "<td>" . $auto["automerk"] . "</td>";
            echo "<td>" . $auto["autokmstand"] . "</td>";
            echo "<td>" . $auto["klantid"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<form action='gar-delete-auto3.php' method='post'>";

        //waarde 0 doorgeven als er niet gechecked wordt
        echo "<input type='hidden' name='verwijdervak' value='0'>";
        echo "<input type='checkbox' name='verwijdervak' value='1'>";
        echo "verwijder deze auto. <br/>";
        echo "<input type='submit'>";
        echo "</form>";

        ?></div>
</div>
</body>
</html>
