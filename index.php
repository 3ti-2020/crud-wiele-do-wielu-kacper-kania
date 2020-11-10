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
        <div class="b">
            <h1>Kacper Kania grupa 1</h1>
            <ul>
                <li class="link"><a class="kar" href="https://kartka.herokuapp.com/#home">karta sklepowa</a></li>
                <li class="link"><a class="kar" href="#">logowanie</a></li>
            </ul>
        </div>
        
        <div class="c">
            <?php
                    $conn = new mysqli("remotemysql.com", "fdvZGG67Fb", "liGhckjUa1", "fdvZGG67Fb");
                    //$conn = new mysqli("localhost", "root", "", "zdalne");
                    $sql = $conn->query("SELECT id_autor_tytul, nazwisko, nazwa from lib_autor, lib_tytul, lib_autor_tytul WHERE lib_autor.id_autor = lib_autor_tytul.id_autor AND lib_tytul.id_tytul = lib_autor_tytul.id_tytul");
        
                    echo("<table border=1>");
                    echo("<tr>
                    <th>id</th>
                    <th>nazwisko</th>
                    <th>tytul</th>
                    </tr>");
                    while($wiersz = $sql->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$wiersz['id_autor_tytul']."</td><td>".$wiersz['nazwisko']."</td><td>".$wiersz['nazwa']."</td>");
                        echo("</tr>");
                    }
                    echo("</table>");
                    ?>
                    <button type="button" class="colorBtn">click</button>
        </div>
        <div class="d">
            <form action="insert.php" method="post">
                <input type="text" name="nazwisko" placeholder = "nazwisko">
                <input type="text" name="nazwa" placeholder = "tytul">
                <input type="submit" value="POST">
            </form>
        </div>
        <div class="a">
            <a class="" href="https://github.com/3ti-2020/crud-wiele-do-wielu-kacper-kania"><img class="obr" src="https://1000logos.net/wp-content/uploads/2018/11/GitHub-logo.png" alt="tekst alternatywny"></a>
        </div>
    </div>
    <script src="java.js"></script>
</body>
</html>