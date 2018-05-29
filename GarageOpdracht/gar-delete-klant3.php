<html>
<head>
    <title>gar-delete-klant3</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage delete klant 3</h1>
        <p>
            op klantid gegevens zoeken uit de tabel klanten van de databse garage zodat ze verwijderd kunnen worden
        </p>
        <?php
        //gegevens uit het formulier halen
        $klantid = $_POST{"klantidvak"};
        $verwijderen = $_POST["verwijdervak"];

        //klantgegevens verwijderen
        if ($verwijderen) {
            require_once "gar-connect.php";

            $sql = $conn->prepare("DELETE FROM klant WHERE klantid = :klantid");
            $sql->execute(["klantid" => $klantid]);

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