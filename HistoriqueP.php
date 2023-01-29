<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="HistoriqueP.css">
    <title>historique paiement</title>
</head>

<body>

   
       <!--container : Accordion-->
       <div class="container">
            <!--Accordion-->
        <!--historique de paiement-->
        
       <!--container : Accordion-->
           
            <!--Accordion-->
            <div class="accordion accordion-flush " id="accordionFlushExample">
                <div class="accordion-item" >
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button name="transaction" style="background-color: #2badc4;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Historique de la paiement
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <!--search-->
                <form action="HistoriqueP.php" method="post">
                    <div style="margin-bottom: 10px;">
                    <input  type="text" name="search" placeholder="Rechercher par id">
                    <input type="submit" value="rechercher" name="submit">
                    <input type="submit" value="actualiser" name="submit">
                    <input style=" background-color: #2badc4; color:white; width: 80px;" value="clair" type="reset" name="submit">
                    </div>
                </form>
                <table class="table1">
            <tr>
                <th>Liste des Paiments</th>
            </tr>
        </table>
        <table>
            <tr id="items">
                <th>Id_Paiment</th>
                <th>Nom Bénéficiaire</th>
                <th>Numéro De Bénéficiaire</th>
                <th>Montant</th>
                <th>Référence</th>
                <th>Statut</th>
                <th>Date</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php
            //include la page de connexion
            include_once "connect.php";
            //requête pour afficher la liste des Paiments
            $req = mysqli_query($con, "SELECT * FROM paymnets");
            if (isset($_POST['search']) && $_POST['search'] != "") {
                $req = mysqli_query($con, "SELECT * FROM paymnets where payment_id=" . $_POST['search'] . ";");
            } else {
                $req = mysqli_query($con, "SELECT * FROM paymnets");
            }
            if (mysqli_num_rows($req) == 0) {
                //s'il n'existe pas
                echo " Il n'y a pas encore Paiment ajouter !";
            } else {
                //si non , affichons la liste 
                while ($row = mysqli_fetch_assoc($req)) {
            ?>
                    <tr class="cc">

                        <td><?= $row['payment_id'] ?></td>
                        <td><?= $row['beneficiaire'] ?></td>
                        <td><?= $row['beneficiaire_acc_num'] ?></td>
                        <td><?= $row['montant'] ?></td>
                        <td><?= $row['referance_no'] ?></td>
                        <td><?= $row['statut'] ?></td>
                        <td><?= $row['create_at'] ?></td>
                        <!--Nous alons mettre l'id de chaque operation dans ce lien -->
                        <td><a href="modifier.php?id=<?= $row['payment_id']?>"><img src="th (30).jpg"></a></td>
                        <td><a href="supprimer.php?id=<?= $row['payment_id']?>"><img src="th (29).jpg"></a></td>
                    </tr>
            <?php
                }
            }
            ?>


        </table>
                
                </div>
                </div>
            </div>
        
        <!--End historique de transaction-->
            <!--Accordion-->
            <div class="accordion accordion-flush " id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" style="background-color: #2badc4;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Historique de la transaction
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <!--search-->
                <form action="HistoriqueP.php" method="post">
                    <div style="margin-bottom: 10px;">
                    <input  type="text" name="search" placeholder="Rechercher Par Id">
                    <input type="submit" value="rechercher" name="submit">
                    <input type="submit" value="actualiser" name="submit">
                    <input style=" background-color: #2badc4; color:white; width: 80px;" value="clair" type="reset" name="submit">
                    </div>
                </form>
                <table class="table1">
            <tr>
                <th>Liste des transformations</th>
            </tr>
        </table>
        <table>
            <tr id="items">
                <th>Id_Transfert</th>
                <th>Type transaction</th>
                <th>Montant</th>
                <th>Source</th>
                <th>Statut</th>
                <th>code_raison</th>
                <th>Date de transfert</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                

            </tr>
            <?php
            //include la page de connexion
            include_once "connect.php";
            //requête pour afficher la liste des transactions
            $req = mysqli_query($con, "SELECT * FROM trensaction");
            if (isset($_POST['search']) && $_POST['search'] != "") {
                $req = mysqli_query($con, "SELECT * FROM trensaction where 	trensaction_id=" . $_POST['search'] . ";");
            } else {
                $req = mysqli_query($con, "SELECT * FROM trensaction");
            }
            if (mysqli_num_rows($req) == 0) {
                //s'il n'existe pas
                echo " Il n'y a pas encore Paiment ajouter !";
            } else {
                //si non , affichons la liste 
                while ($row = mysqli_fetch_assoc($req)) {
            ?>
                    <tr class="cc">

                        <td><?=$row['trensaction_id'] ?></td>
                        <td><?=$row['trensaction_type'] ?></td>
                        <td><?=$row['montant'] ?></td>
                        <td><?=$row['source'] ?></td>
                        <td><?=$row['statut'] ?></td>
                        <td><?=$row['code_raison'] ?></td>
                        <td><?=$row['create_at'] ?></td>
                        <!--Nous alons mettre l'id de chaque operation dans ce lien -->
                        <td><a href="modifier.php?id=<?= $row['trensaction_id']?>"><img src="th (30).jpg"></a></td>
                        <td><a href="supprimer.php?id=<?= $row['trensaction_id']?>"><img src="th (29).jpg"></a></td>
                    </tr>
            <?php
                }
            }
            ?>


        </table>
                  </div>
                </div>
            </div>
        </div>
</body>

</html>