<html>
<head>
    <title>gar-update-auto2</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage update klant 2</h1>
        <p>
            dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel auto van de databse garage
        </p>
        <?php
        //autogegegevens uit het formulier halen
        $autokenteken = $_POST["autokentekenvak"];

        //autogegevens uit de tabel halen
        require_once "gar-connect.php";

        $autos = $conn->prepare("SELECT autokenteken, automerk, autokmstand, klantid FROM auto WHERE autokenteken = :autkenteken");
        $autos->execute(["autokenteken" => $autokenteken]);

        //autogegevens in een nieuw formulier laten zien
        echo "<form action='gar-update-auto3.php' method='post'>";
        foreach ($autos as $auto) {
            echo "autokenteken: <input type='text' ";
            echo "name = 'autokentekenvak' ";
            echo "value = '" . $auto["autokenteken"] . "' ";
            echo "> <br/>";

            echo "automerk: <input type='text' ";
            echo "name = 'automerkvak' ";
            echo "value = '" . $auto["automerk"] . "' ";
            echo "> <br/>";

            echo "autokmstand: <input type='text' ";
            echo "name = 'autokmstandvak' ";
            echo "value = '" . $auto["autokmstand"] . "' ";
            echo "> <br/>";

            echo "klantid: <input type='text' ";
            echo "name = 'klantidvak' ";
            echo "value = '" . $auto["klantid"] . "' ";
            echo "> <br/>";
        }

        echo "<input type='submit'>";
        echo "</form>"

        ?>
    </div>
</div>
</body>
</html>