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
            <a class="" href="https://github.com/3ti-2020/crud-wiele-do-wielu-kacper-kania"><img class="obr" src="https://1000logos.net/wp-content/uploads/2018/11/GitHub-logo.png" alt="tekst alternatywny"></a>
        </div>
        <div class="b">
            <h1>Kacper Kania grupa 1</h1>
            <ul>
                <li class="link"><a class="kar" href="https://kartka.herokuapp.com/#home">karta sklepowa</a></li>
                <li class="link"><a class="kar" href="https://egzamin-kacper.herokuapp.com/">egzamin</a></li>
                <li class="link"><a class="kar" href="https://zdalne.herokuapp.com/">egzamin</a></li>
                
            </ul>
        </div>
        <!-- <div class="c">
            <h1>Zaloguj</h1> <br>
            <input type="text" placeholder="login"><br>
            <input type="text" placeholder="haslo">
            <button>zaloguj</button>
        </div> -->
        
        <div class="d">
            <?php
            session_start();
    
            if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj' ){ 
                unset($_SESSION['zalogowany']);                         
                unset($_SESSION['admin']); 
            }
                $conn = new mysqli("remotemysql.com", "fdvZGG67Fb", "liGhckjUa1", "fdvZGG67Fb");
                // $servername="remotemysql.com";
                // $username="Exb33YnuaQ";
                // $password="imJTYDYLDl";
                // $dbname="Exb33YnuaQ";
        
                // $conn = new mysqli($servername, $username, $password, $dbname);
        
                $result = $conn->query("SELECT * FROM users");
        
                
        
                    if(isset($_POST['haslo']) && isset($_POST['login'])){
                        while($wiersz = $result->fetch_assoc()){
                            if($wiersz['nazwa']==$_POST['login'] && $wiersz['haslo']==$_POST['haslo'] && $wiersz['admin'] == 1){
                                $_SESSION['zalogowany'] = 1;
                                $_SESSION['admin'] = 1;
                            }else if($wiersz['nazwa']==$_POST['login'] && $wiersz['haslo']==$_POST['haslo']){
                                $_SESSION['zalogowany'] = 1;
                            }
                        }
                    }
            
                    if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1){
            
                    //$conn = new mysqli("remotemysql.com", "fdvZGG67Fb", "liGhckjUa1", "fdvZGG67Fb");
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

                    $sql1 = $conn->query("SELECT * FROM wypozycz");
                    echo("<table border=1>");
                    echo("<tr>
                    <th>id</th>
                    <th>uzytkownik</th>
                    <th>tytul</th>
                    <th>data</th>
                    </tr>");
                    while($wiersz1 = $sql1->fetch_assoc()){
                        echo("<tr>");
                        echo("<td>".$wiersz1['id']."</td><td>".$wiersz1['uzytkownik']."</td><td>".$wiersz1['tytul']."</td><td>".$wiersz1['Data']."</td>");
                        echo("</tr>");
                    }
                    echo("</table>");

                    echo("<a href='index.php?akcja=wyloguj'><h1 class='wylog' id='wylog'>WYLOGUJ</h1></a>");
                    }else{
                        echo("<h1 id='zal'>NIE ZALOGOWANO</h1>");
                        echo("        
                        <form action='index.php' method='POST' class='formu' id='form'>
                        LOGIN: <input type='text' name='login' placeholder='a'>
                        HASLO: <input type='text' name='haslo' placeholder='a'>
                        <input type='submit' value='zaloguj'>
                    </form>");
                    }
                    ?>
                    <button type="button" class="colorBtn">click</button>
        </div>
        <div class="e">
            <?php
                    if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj' ){  
                        unset($_SESSION['zalogowany']);                         
                    }
                
                if(isset($_POST['haslo']) && $_POST['haslo'] == 'a' ){
                        $_SESSION['zalogowany'] = 1;
                    }
                if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1){
                   echo("<form action='insert.php' method='post'>
                        <input type='text' name='nazwisko' placeholder = 'nazwisko'>
                        <input type='text' name='nazwa' placeholder = 'tytul'>
                        <input type='submit' value='POST'>
                    </form>");
                };
        ?>
        </div>
        
       
       
    </div>
    <script src="java.js"></script>
</body>
</html>
