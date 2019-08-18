<?php
   include 'connection.php';
   include 'validation.php';
   include 'queries.php';

   $statussuccess = $statusfail = "";
   //Fetch Country List from database
   $cmd = $conn->prepare($query);
   $cmd->execute();
   $result = $cmd->fetchAll(PDO::FETCH_ASSOC);

   try{
   if(empty($_POST['country']) || empty($_POST["gender"]) || empty($_POST["address"]) || empty($_POST["phone"]) || empty($_POST["password"]) || empty($_POST["name"])) {
     //echo "try again";
     $statusfail = "Make sure you fill all * fields.";
   }
   else {
     $cmd = $conn->prepare($query1);
     $cmd->execute();
     $statussuccess = "Registration Successful!";
        }
      }
    catch(PDOException $f){
      echo $f->getMessage();
    }
   ?>
