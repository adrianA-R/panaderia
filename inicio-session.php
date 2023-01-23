<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /panaderiaBali');
  }
  require 'database.php';

  if (!empty($_POST['cedula']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, nombre, password FROM cliente WHERE cedula = :cedula');
    $records->bindParam(':cedula', $_POST['cedula']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
            
    $message = '';
    
    if($results == false){
      $records = $conn->prepare('SELECT id, nombre, password FROM administrador WHERE cedula = :cedula');
      $records->bindParam(':cedula', $_POST['cedula']);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);

      if(!$results == false){
        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
          $_SESSION['user_id'] = $results['id'];
          header("Location: /panaderiaBali");
        } else
          header("Location: /panaderiaBali/Sing-up.php");
      }else 
          header("Location: /panaderiaBali/Sing-up.php");

    }else if (count($results) > 0) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /panaderiaBali");
      
    } else if ( password_verify($_POST['password'], $results['password']) ) {
      $message = 'Su contrase;a no coincide';
      header("Location: /panaderiaBali/Sing-up.php");
    }
  }else
    header("Location: /panaderiaBali/Sing-up.php");
    $message = 'los datos no pueden estar vacios';

?>