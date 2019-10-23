
<?php

 
 try {
  $pdo = new \PDO("mysql:host=localhost;dbname=Escuela", "root", "password");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
 
  $nombre ="Mecatronica";

  $stm = $pdo->prepare("INSERT INTO carrera (nombre)  VALUES (:nombre)");
  $stm->bindParam(":nombre", $nombre);
   $data = $stm->execute();
  print_r($data);
  echo "working";
} catch (PDOException $e){
  echo $e->getMessage();
}
 
 ?>
 