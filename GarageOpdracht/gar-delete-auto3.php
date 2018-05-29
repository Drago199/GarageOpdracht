<html>
<head>
    <title>gar-delete-auto3</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage delete auto 3</h1>
        <p>
            op kenteken gegevens zoeken uit de tabel auto van de databse garage zodat ze verwijderd kunnen worden
        </p>
        <?php
        //gegevens uit het formulier halen
        $autokenteken = $_POST{"autokentekenvak"};
        $verwijderen = $_POST["verwijdervak"];

        //autogegevens verwijderen
        if ($verwijderen) {
            require_once "gar-connect.php";

            $sql = $conn->prepare("DELETE FROM auto WHERE autokenteken = :autokenteken");
            $sql->execute(["autokenteken" => $autokenteken]);

            echo "de gegevens zijn verwijderd. <br/>";
        } else {
            echo "de gegevens zijn niet verwijderd. <br/>";
        }

        echo "<a href='gar-menu.php' >terug naar het menu</a>"
        ?>
    </div>
</div>
</body>
</html>