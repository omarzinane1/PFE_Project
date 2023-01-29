<?php
       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($firstname) && isset($lastname)){
                //connexion à la base de donnée
                include_once "connect.php";
                //requête d'ajout
               // $req = mysqli_query($con , "INSERT INTO list_temps VALUES(NULL,'$con','$nom', '$prenom','$presente','$professeur','$matire','$date','$heure')");
                $req = mysqli_query($con,"INSERT INTO users VALUES ('$user_id','$first_name','$last_name','$email','$password1')");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: register.html");
                }else {//si non
                    $message = "etudant non ajouté";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    ?>
    
