<html>
<head>
    <title>gar-zoek-auto2</title>
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>
<div class="backgroundimg"></div>
<h1>garage zoeken op kenteken</h1>
<p>
    op kenteken gegevens zoeken uit de tabel auto van de database garage
</p>

<?php
//kenteken uit het formulier halen
$autokenteken = $_POST["autokentekenvak"];

$sql = $conn->prepare("SELECT autokenteken, automerk, autokmstand, klantid FROM auto WHERE autokenteken = :autokenteken");
$sql->execute(["autokenteken" => $autokenteken]);

//autogegevens laten zien
echo "<table>";
foreach ($sql as $rij) {
    echo "<tr>";
    echo "<tb>" . $rij["autokenteken"] . "</tb>";
    echo "<tb>" . $rij["automerk"] . "</tb>";
    echo "<tb>" . $rij["autokmstand"] . "</tb>";
    echo "<tb>" . $rij["klantid"] . "</tb>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='gar-menu.php'>terug naar het menu</a>";
?>
</body>
</html>