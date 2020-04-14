<?php
 //récupérer les données venant de formulaire
   $mail=isset($_POST["mail"])? $_POST["mail"]:"";
   $photoid=isset($_POST["photoid"])? $_POST["photoid"]: "";
   $photomur=isset($_POST["photomur"])? $_POST["photomur"]: "";

  //identifier votre BDD
   $database = "projet"; 
 
 //connectez-vous de votre BDD
   $db_handle = mysqli_connect('localhost', 'root', '');
   $db_found = mysqli_select_db($db_handle, $database); 

   if (isset($_POST['button'])) {
       if ($db_found) {
                  $sql = "INSERT INTO vendeur(Mail,photoid,photomur)
                        VALUES ('$mail','$photoid','$photomur')";
                         $result = mysqli_query($db_handle, $sql);
                    echo "Add successful. <br>";
                  }
            else {
            	echo "Database not found";
         }

        } 
 //fermer la connexion  
    mysqli_close($db_handle);   
?>