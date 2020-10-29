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
    <div class="calo">
        <div class="a">
            <h1>Kacper Kania grupa 1</h1>
        </div>
        <div class="b">
            <?php
                    $conn = new mysqli("remotemysql.com", "fdvZGG67Fb", "liGhckjUa1", "fdvZGG67Fb");
                    $sql = $conn->query("SELECT id_autor_tytul, nazwisko, nazwa from lib_autor, lib_tytul, lib_autor_tytul WHERE lib_autor.id_autor = lib_autor_tytul.id_autor AND lib_tytul.id_tytul = lib_autor_tytul.id_tytul");
        
                    echo("<table border=1>");
                    echo("<tr>
                    <th>id</th>
                    <th>nazwisko</th>
                    <th>nazwa</th>
                    </tr>");
                    while($wiersz = $sql->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$wiersz['id_autor_tytul']."</td><td>".$wiersz['nazwisko']."</td><td>".$wiersz['nazwa']."</td>");
                        echo("</tr>");
                    }
                    echo("</table>");
                    ?>
        </div>
        <div class="c">
            <form action="insert.php" method="post">
                <input type="text" placeholder = "id autora">
                <input type="text" placeholder = "id książki">
                <input type="submit" value="POST">
            </form>
        </div>
    </div>
</body>
</html>