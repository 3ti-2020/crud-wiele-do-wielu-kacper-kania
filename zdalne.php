<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "zdalne");
    $sql = $conn->query("SELECT * FROM lib_autor");

    echo("<table border=1>");
    echo("<tr>
    <th>id</th>
    <th>nazwisko</th>
    </tr>");
    while($wiersz = $sql->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$wiersz['id_autor']."</td><td>".$wiersz['nazwisko']."</td>");
        echo("</tr>");
    }
    echo("</table>");
    ?>
</body>
</html>