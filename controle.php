
<?php
require 'connect.php';
session_start();
//register
if (isset($_POST['button'])) {
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $passc = mysqli_real_escape_string($con, $_POST['passc']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $select = mysqli_real_escape_string($con, $_POST['select']);
    
    $query="SELECT * FROM users";
    $query_run = mysqli_query($con, $query);
    $num_ligne=mysqli_num_rows($query_run);
    $bool=1;   
        while( $ligne=mysqli_fetch_assoc($query_run))
       {
        if($ligne['email']==$address){
            $bool=0;
        }
       }
    if($bool!=0){
    switch($select){
           case "Admin":
            $query = "INSERT INTO users (user_id ,  first_name,last_name,email,password1,password1Confirm,usertype) VALUES 
            (null,'$nom', '$prenom','$address', '$pass', '$passc','$select')";
            $query_run = mysqli_query($con, $query);
            if ($query_run) {
            $_SESSION['message'] = "Le compte a été créé avec succès";
            header("Location: Admin.php");
            }else {
                $_SESSION['message'] = "Le compte n'a pas été créé";
                header("Location: register.php");
                exit(0);
            } 
            break; 
            case "Client":
                $query = "INSERT INTO users (user_id ,  first_name,last_name,email,password1,password1Confirm,usertype) VALUES 
                (null,'$nom', '$prenom','$address', '$pass', '$passc','$select')";
                $query_run = mysqli_query($con, $query);
                if ($query_run) {
                $_SESSION['message'] = "Le compte a été créé avec succès";
                header("Location: header.php");
                }else {
                    $_SESSION['message'] = "Le compte n'a pas été créé";
                    header("Location: register.php");
                    exit(0);
                } 
            break; 
            default:
            $_SESSION['message'] = "Etes-Vous Client Ou Non ?";
            header("Location: register.php");
            exit(0);
        }
    }else{
        $_SESSION['message'] = "Ce Email existe déja";
        header("Location: register.php"); 
        exit(0);
    }
}

//login
if (isset($_POST['login'])) {
    $email1 = mysqli_real_escape_string($con, $_POST['emailg']);
    $password = mysqli_real_escape_string($con, $_POST['passworg']);
    $query="SELECT * FROM users WHERE email='$email1' AND password1='$password'";
    $query_run = mysqli_query($con, $query);
    $num_ligne=mysqli_num_rows($query_run);
    if($num_ligne > 0){
        while( $ligne=mysqli_fetch_assoc($query_run))
       {
       
            if($ligne['usertype'] == "Client"){
                header("Location: header.php");
            }else{
                header("Location: Admin.php");
            }
        }
    }else{
        $_SESSION['message'] = "Nom utilisateur ou mot de  passe Incorrect !";
        header("Location: login.php"); 
        exit(0);
    }
}
   //client page admin
  /* if (isset($_POST['submit'])) {
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $solde = mysqli_real_escape_string($con, $_POST['solde']);
    $ville = mysqli_real_escape_string($con, $_POST['ville']);
    $tele = mysqli_real_escape_string($con, $_POST['telephone']);
    $code = mysqli_real_escape_string($con, $_POST['code']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $select = mysqli_real_escape_string($con, $_POST['type_compte']);
    $query = "INSERT INTO client (client_id ,prenom,nom,password,solde,ville,telephone,code,date,type_compte) VALUES 
            (null,'$nom', '$prenom', '$pass','$solde', '$ville','$tele','$code','$date','$select')";
    $query_run = mysqli_query($con, $query);

    
    if ($query_run) {
        $_SESSION['message'] = " Added Successfuly";
        header("Location: Admin.php");
        exit(0);
     }

}*/
//compte client in header
if (isset($_POST['client'])) {
    $query="SELECT * FROM accounts ";
    $query_run = mysqli_query($con, $query);
    $num_ligne=mysqli_num_rows($query_run);
    if($num_ligne > 0){
        for($i=0;$i<=$num_ligne;$i++) {
        $ligne=mysqli_fetch_assoc($query_run);
        echo"<div id='Panel'>";
           echo" <p>".$ligne['account_number']."</p>";
           echo" <p>".$ligne['password']."</p>";
           echo" <p>".$ligne['ville']."</p>";
           echo" <p>".$ligne['account_type']."</p>";
           echo" <p>".$ligne['balance']."</p>";
           echo" <p>".$ligne['create_at']."</p>";
        echo "</div>";
        }
    }else{
        echo " <script>
        document.getElementById('error').style.display='block';
        document.getElementById('error').style.color= 'red';
        </script>
        ";
    }
}

/* card client */
if (isset($_POST['card'])) {
    $n = mysqli_real_escape_string($con, $_POST['num_carte']);
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $annee = mysqli_real_escape_string($con, $_POST['annee']);
    $mois = mysqli_real_escape_string($con, $_POST['mois']);
    $cvv = mysqli_real_escape_string($con, $_POST['cvv']);
    
    $query = "INSERT INTO carte (num_carte,nom_c,annee,mois,cvv) VALUES 
            ($n,'$nom', '$annee','$mois','$cvv')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = " Added Successfuly";
            header("Location: Admin.php");
        exit(0);
    
    }else {
        $_SESSION['message'] = "Not Added ";
        header("Location: Admin.php");
        exit(0);
    }
}

//accounts 
if (isset($_POST['account'])) {
    $code = mysqli_real_escape_string($con, $_POST['code']);
    $ville = mysqli_real_escape_string($con, $_POST['ville']);
    $numero = mysqli_real_escape_string($con, $_POST['numero']);
    //$numero_client = mysqli_real_escape_string($con, $_POST['numero_client']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $solde = mysqli_real_escape_string($con, $_POST['solde']);
    $select = mysqli_real_escape_string($con, $_POST['type_compte']);
    $query = "INSERT INTO accounts (account_id, user_id, account_number, password, ville, account_type, balance, create_at) VALUES 
            (null,null,'$numero', '$code','$ville', '$select', '$solde','$date')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = " Added Successfuly";
        header("Location: Admin.php");
        exit(0);
    
    }else {
            $_SESSION['message'] = "Product Not Added ";
            header("Location: Admin.php");
            exit(0);
    }
    }
    // message
    if (isset($_POST['Envoyer'])) {
        $nom = mysqli_real_escape_string($con, $_POST['nom']);
        $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $sujet = mysqli_real_escape_string($con, $_POST['sujet']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        $query = "INSERT INTO notification (notification_id	,email	,sujet	,message) VALUES 
                (null,'$email', '$sujet','$message')";
        $query_run = mysqli_query($con, $query);
    
        if ($query_run) {
            $_SESSION['message'] = "le message a été complété avec succès";
            header("Location: Admin.php");
            exit(0);
        }else {
            $_SESSION['message'] = "Message ne pas ajouter";
            header("Location: Admin.php");
            exit(0);
        } 
    }
    //form dépose
    if (isset($_POST['deposer'])) {
        $select = mysqli_real_escape_string($con, $_POST['select']);
        $montant = mysqli_real_escape_string($con, $_POST['deposer_montant']);
        $Code = mysqli_real_escape_string($con, $_POST['Code']);
        $query="SELECT * FROM accounts WHERE account_type='$select' AND account_id ='$Code'";
        $query_run = mysqli_query($con, $query);
        $num_ligne=mysqli_num_rows($query_run);
        if($num_ligne > 0){
        $sql= "UPDATE accounts SET balance=balance + '$montant'  where account_type ='$select' AND account_id ='$Code'";
        $query_run = mysqli_query($con, $sql);     
        if($query_run){
            $_SESSION['message'] = "Le processus de dépot de l'argent s'est terminé avec succès";
            header("Location: Admin.php");
            exit(0);
        }else{
            $_SESSION['message'] = "Le processus de dépot de l'argent s'est terminé avec échoue";
            header("Location: Admin.php");
            exit(0);
        }   
        }else{
            $_SESSION['message'] = "Vérifier le type ou le montant de compte";
            header("Location: Admin.php");
            exit(0);
        }
    }  
// retirer
if (isset($_POST['retirer'])) {
    $option = mysqli_real_escape_string($con, $_POST['option']);
    $montant = mysqli_real_escape_string($con, $_POST['montant']);
    $query="SELECT * FROM accounts WHERE account_type='$option'";
    $query_run = mysqli_query($con, $query);
    $num_ligne=mysqli_num_rows($query_run);
    if($num_ligne > 0){
    $ligne=mysqli_fetch_assoc($query_run);
    if($ligne['balance'] >= $montant){
    $sql= "UPDATE accounts SET balance = balance - '$montant' where account_type ='$option'";
    $query_run = mysqli_query($con, $sql);     
    if($query_run){
        $_SESSION['message'] = "Le processus de retirer de l'argent s'est terminé avec succès";
        header("Location: Admin.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Le processus de retirer de l'argent s'est terminé avec échoue";
        header("Location: Admin.php");
        exit(0);
    }
    }else{
        $_SESSION['message'] = "le montant ne suffit pas";
        header("Location: Admin.php");
        exit(0);
    }   
    }else{
        $_SESSION['message'] = "Vérifier le type de compte";
        header("Location: Admin.php");
        exit(0);
    }
}  
    
?>
