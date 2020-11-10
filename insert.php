<?php

$servername="remotemysql.com";
$username="fdvZGG67Fb";
$password="liGhckjUa1";
$dbname="fdvZGG67Fb";
$conn=new mysqli($servername,$username,$password,$dbname);
//$conn = new mysqli("localhost", "root", "", "zdalne");

if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }    

$nazwisko=$_POST['nazwisko'];

$sql="INSERT INTO `lib_autor`(`nazwisko`) VALUES ('$nazwisko')";

$tytul=$_POST['nazwa'];

$sql2="INSERT INTO `lib_tytul`(`nazwa`) VALUES ('$tytul')";

    
        
      mysqli_query($conn, $sql);
      mysqli_query($conn, $sql2);

      $result = $conn->query("SELECT `id_autor` FROM `lib_autor` order by `id_autor` desc limit 1");
      $result2 = $conn->query("SELECT `id_tytul` FROM `lib_tytul` order by `id_tytul` desc limit 1");


      while($wiersz = $result->fetch_assoc()){
             $zmienna= $wiersz['id_autor'];
      }

      while($wiersz2 = $result2->fetch_assoc()){
            $zmienna2= $wiersz2['id_tytul'];
      } 

      $sql3  = "INSERT INTO lib_autor_tytul(`id_autor`, `id_tytul`) VALUES ('$zmienna', '$zmienna2')";

      mysqli_query($conn, $sql3);

      $conn->close();

      header('Location: https://kacper-kania.herokuapp.com/');

?>