
<?php

 try {
  $pdo = new \PDO("mysql:host=localhost;dbname=Escuela", "root", "password");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    
  $nombre ="Mariano";
  $matricual="BB18";
   $edad= "18";
 

$stm = $pdo->prepare("INSERT INTO estudiante(nombre,matricula,edad)  VALUES (:nombre,:matricula,:edad)");
  $stm->bindParam(":nombre", $nombre);
  $stm->bindParam(":matricula", $matricual);
  $stm->bindParam(":edad", $edad);


   $data = $stm->execute();
  print_r($data);
  echo "working";
} catch (PDOException $e){
  echo $e->getMessage();
}
 
 ?>
 