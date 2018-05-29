<html>
<head>
    <title>gar-create-auto2</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg">
    <div class="menu">
        <h1>garage create klant 2</h1>
        <p> een auto toevoegen aan het tabel auto in de database garage</p>
        <?php
        //autogegevens uit het formulier halen
        $autokenteken = $_POST['autokentekenvak'];
        $automerk = $_POST["automerkvak"];
        $autokmstand = $_POST["autokmstandvak"];
        $klantid = $_POST["klantidvak"];

        // autogegevens invoeren in tabel
        require_once "gar-connect.php";

        $sql = $conn->prepare("INSERT INTO auto VALUES (:autokenteken, :automerk, :autokmstand, :klantid )");

        $sql->execute([
            "autokenteken" => $autokenteken,
            "automerk" => $automerk,
            "autokmstand" => $autokmstand,
            "klantid" => $klantid
        ]);

        echo "de auto is toegevoegd <br/>";
        echo "<a href='gar-menu.php'>terug naar het menu </a>"
        ?>
    </div>
</div>
</body>
</html>