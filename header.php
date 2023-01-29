<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">-->
    <link rel="stylesheet" href="main.css">
    <title>Header</title>
</head>
<body>
    <!--Main page header-->
     <header class="main-page-header mb-3 bg-primary">
        <!--container-->
        <div class="container">
            <!--Navigation-->
            <nav class="navbar">
                <ul>
                    <!--home-->
                    <li style="color: white; font-size: 20px; margin-right: 100px;">Banque en toute simplicité</li>
                    <!--End home-->
                    <li><a href="#">Page Home</a></li>
                    <li><a href="HistoriqueP.php">Historique</a></li>
                    <li><a href="#">Autre</a></li>
                    
                    
                </ul>
                <!--button-->
                <a href="" class="btn btn-sm" style="margin-left: 100px; color: white; text-decoration: none; padding-bottom: 15px;">
                    <i class="fa fa-sign-out ms-2"><img src="th (24).jpg" alt="" style=" border-radius: 10px; height: 25px;"></i> Se déconnecter
                </a>
                <!--button-->
            </nav>
            <!--End Navigation-->

            <!--icon-->
            <!--End icon-->
            

        </div>
        <!--end container-->
    </header>
    <!--End header-->
    <!--Start transact-->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Transaction</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
            <!--offcanvas: transact body-->
            <div class="offcanvas-body">
                <small class="card-text text-white">
                    choisissez une option ci-dessous pour effectuer une transaction.
                </small>
                <!--Transaction type -->
                <select name="transact-type" class="form-control my-3" id="transact-type">
                    <option value="">-Sélectionner type de transaction-</option>
                    <option value="Paiement">Paiement</option>
                    <option value="transfert">Transfert</option>
                    
                </select>
                <!--End Transaction type -->

                <!--Card: payment card-->
                <form action="paiement.php" method="post">
                <div class="card payment-card">
                    <!--card body-->
                    
                    <div class="card-body">
                        <!--form group-->
                       
                        <div class="form-group mb-2">
                        
                            <label for="">Titulaire du compte/Nom Du Bénéficiaire</label>
                            <input type="text" name="Beneficiaire" class="form-control" id="" placeholder="Saisir Titulaire du compte/Nom Du Bénéficiaire">
                        </div>
                        <!--End form group-->
                        <!--form group-->
                        <div class="form-group mb-2">
                            <label for="">Le Numéro De Bénéficiaire</label>
                            <input type="text" name="account_number" class="form-control" id="" placeholder="Saisir Numéro De Bénéficiaire">
                        </div>
                        <!--End form group-->

                        <!--form group-->
                        <div class="form-group">
                            <label for="">Sélectionner Le Compte</label>
                        <!--select account option-->
                        <select name="account" class="form-control my-3" id="">
                            <option value="">--Sélectionner Le Compte--</option>
                            <option value="Cheque">--Chèque--</option>
                            <option value="Economies">--Des économies--</option>
                            <option value="Entreprise">--Entreprise--</option>
                        </select>
                        <!--End select account option-->
                        </div>
                        <!--End form group-->
                        <!--form group-->
                        <div class="form-group mb-2">
                            <label for="">référence</label>
                            <input type="text" name="reference" class="form-control" id="" placeholder="Saisir référence">
                        </div>
                        <!--End form group-->
                        <!--form group-->
                        <div class="form-group mb-2">
                            <label for="">Saisir Le Montant Du Paiement</label>
                            <input type="text" name="montant" class="form-control" id="" placeholder="Saisir Le Montant Du Paiement">
                        </div>
                        <!--End form group-->
                        <!--form group-->
                        <div class="form-group mb-2">
                            <button name="payer"  id="transact-btn" class="btn btn-md">Payer</button>
                        </div>
                        <!--End form group-->
                        
                    </div>
                    <!--End card body-->
                    
                </div>
                </form>
                <!--End Card: payment card-->
               

                <!--Card: transfer card-->
                <form action="paiement.php" method="post">
                <div class="card transfer-card">
                    <!--card body-->
                    <div class="card-body">
                        
                        <!--form group-->
                        <div class="form-group">
                            <label for="">Sélectionner Le Compte</label>
                        <!--select account option-->
                        <select name="account_type1" class="form-control my-3" id="">
                            <option value="">--Sélectionner Le Compte--</option>
                            <option value="Cheque">--Chèque--</option>
                            <option value="Economies">--Des économies--</option>
                            <option value="Entreprise">--Entreprise--</option>
                        </select>
                        <!--End select account option-->
                        </div>
                        <!--End form group-->
                        
                         <!--form group-->
                         <div class="form-group">
                            <label for="">Sélectionner Le Compte</label>
                        <!--select account option-->
                        <select name="account_type2" class="form-control my-3" id="">
                            <option value="">--Sélectionner Le Compte--</option>
                            <option value="Cheque">--Chèque--</option>
                            <option value="Economies">--Des économies--</option>
                            <option value="Entreprise">--Entreprise--</option>
                        </select>
                        <!--End select account option-->
                        </div>
                        <!--End form group-->
                        
                        <!--form group-->
                        <div class="form-group mb-2">
                            <label for="">Saisir Le Montant Du Transfert</label>
                            <input type="text" name="montant" class="form-control" id="" placeholder="Saisir Le Montant Du Transfert">
                        </div>
                        <!--End form group-->
                        <!--form group-->
                        <div class="form-group mb-2">
                            <button id="transact-btn" name="Transfert" class="btn btn-md">Transfert</button>
                        </div>
                        <!--End form group-->

                    </div>
                    <!--End card body-->
                </div>
                </form>
                <!--End Card: transfer card-->

                
                

            </div>
            <!--End Offcanvas transct-->
    </div>
    <!--End Start transact-->
    <!--Right side offcanvas: servise -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel" class="text-white">Nous sommes à votre service</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
            <!--offcanvas-body-->
            <div class="offcanvas-body">
                <!-- card :servise Form container-->
                <div class="card">
                    <!--card body-->
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link active" href="#"><img src="th (35).jpg" alt="" style="height: 40px; border-radius: 50px;"> Contactez-nous</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"><img src="th (36).jpg" alt=""style="height: 35px; border-radius: 50px;"> Agences & guichets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><img src="th.jpg" alt=""style="height: 40px; border-radius: 50px;"> Cours des valeurs et devises</a>
                              </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#"><img src="th (1).jpg" alt=""style="height: 30px; border-radius: 60px;">Crédit Immobilier en ligne</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="#"><img src="th (2).jpg" alt=""style="height: 35px; border-radius: 60px;">  A propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><img src="th (3).jpg" alt=""style="height: 45px; border-radius: 60px;"> Quitter </a>
                              </li>
                          </ul>
                    </div>
                    <!--End card body-->

                </div>
                <!--End card :accounts Form container-->
        </div>
            <!--End offcanvas-body-->
    </div>
    <!--End Right side offcanvas service-->

    <!-- container-->
    <div id="form_client">
    <div class="container d-flex" >
    <br>
         <button id="" class="btn btn-primary shadow" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <i class="fa fa-credit-card"><img src="th (4).jpg" alt="" style="height: 40px;border-radius: 50px;"></i> Services
        </button>
        <button id="transact-btn" class="btn ms-auto shadow" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
           <i class="fa fa-wallet"><img src="th (26).jpg" alt="" style="height: 40px; border-radius: 50px;"></i> 
            Transaction
        </button>
    </div>
    <!--end container-->
    <!--container: total accounts balance-->
    <?php
                //include la page de connexion
                include_once "connect.php";
                //requête pour afficher la liste des comptes
                
                $solde=null;
                $req = mysqli_query($con , "SELECT * FROM accounts");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas
                  $solde=0;
                    
                }else {
                    //si non , affichons la liste 
                    while($row=mysqli_fetch_assoc($req)){
                        $solde+=$row['balance'];
                    }
                    ?>
        <div class="container d-flex py-3">
            <h4 class="ma-auto">Solde Total Des Comptes  :</h4>
            <h2 class="ms-auto"><?=$solde?>.00 Dh</h2>
        </div>
        <?php
                   
             }
        ?>
    <!--End container: total accounts balance-->

    <!--container : Accordion-->
    <div class="container">
            <!--Accordion-->
            <div class="accordion accordion-flush " id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button name="client" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Informations sur le compte
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <table>
                        <tr id="items">
                            <th>Numéro de compte </th>
                            <th>Code secret</th>
                            <th>Ville</th>
                            <th>Type De Compte</th>
                            <th>Solde</th>
                            <th>Date</th>
                            
                            
                        </tr>
                    <?php
                        
                //include la page de connexion
                include_once "connect.php";
                //requête pour afficher la liste des comptes
                
                
                $req = mysqli_query($con , "SELECT * FROM accounts");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas
                    echo   '<script> alert("Il n y a pas encore compte ajouter !")</script>' ;
                    echo   '<h4> </h4>' ;
                    
                }else {
                    //si non , affichons la liste 
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr class="cc">
                            
                            <td id="client_id"><?=$row['account_number']?></td>
                            <td><?=$row['password']?></td>
                            <td><?=$row['ville']?></td>
                            <td><?=$row['account_type']?></td>
                            <td><?=$row['balance']?></td>
                            <td><?=$row['create_at']?></td>
                            <!--Nous alons mettre l'id de chaque operation dans ce lien -->
                            
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
        </div>
        <div class="container">
            <!--Accordion-->
            <div class="accordion accordion-flush " id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Informations sur le client
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!--Accordion-->
            <div class="accordion accordion-flush " id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Notification
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <!--php notification-->
                    
                        
                    <?php
                        
                        //include la page de connexion
                        include_once "connect.php";
                        //requête pour afficher la liste des comptes
                       

                        $req1 = mysqli_query($con , "SELECT * FROM users");
                        $req2 = mysqli_query($con , "SELECT * FROM notification");
                        
                        
                        if(mysqli_num_rows($req1) == 0 && mysqli_num_rows($req2) == 0){
                            //s'il n'existe pas
                            echo   '.<li id="client_id">Il n y a pas encore compte ajouter !</li>.' ;
                        }else{ 
                          
                            $email=null;
                            
                            $row1=mysqli_fetch_assoc($req1);
                            $row2=mysqli_fetch_assoc($req2);
                            if($row1['email']==$row2['email']){
                                $email=$row1['email'];
                                
                            }    
                        $req = mysqli_query($con , "SELECT * FROM notification where email='$email'");
                        if(mysqli_num_rows($req) == 0){
                            //s'il n'existe pas
                            echo   '.<li id="client_id">Il n y a pas encore Message Envoyer !</li>.' ;
                          
                        }else {
                            //si non , affichons la liste 
                            while($row=mysqli_fetch_assoc($req)){
                                ?>
                                
                                
                              <ul class="cc">
                              
                              <p style="color: red;">Email: <?=$row['email']?></p>
                              <p style="color: green;">Sujet :<?=$row['sujet']?></p>
                              <p style="color: blue;">Message :<?=$row['message']?></p>
                              <hr>
                              </ul>
                                    
                                <?php
                                    }
                                    
                                }
                        }
                            ?>
                    
                    </div>
                  </div>
                </div>
              </div>
              <!--End Accordion-->
        </div>
    <!--End Accordion-->
    </div>
    <!--card client-->
          
    <div id="card" class="container1">

        <div class="card-container1">
        <?php
                        
                        //include la page de connexion
                include_once "connect.php";
                //requête pour afficher la liste des Paiments
                
                
                $req = mysqli_query($con , "SELECT * FROM carte");
                    //si non , affichons la liste 
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
            <div class="front">
                <div class="image">
                    <img src="chip.png" alt="">
                    <img src="visa.png" alt="">
                </div>
                <div class="card-number-box"><?=$row['num_carte']?></div>
                <div class="flexbox">
                    <div class="box">
                        
                        <div class="card-holder-name"><?=$row['nom_c']?></div>
                    </div>
                    <div class="box">
                        <span>expires end</span>
                        <div class="expiration">
                            <span class="exp-month"><?=$row['mois']?></span>
                            <span class="exp-year"><?=$row['annee']?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="back">
                <div class="stripe"></div>
                <div class="box">
                    <span>cvv</span>
                    <div class="cvv-box"><?=$row['cvv']?></div>
                    <img src="image/visa.png" alt="">
                </div>
                <?php
                }
            ?>
            </div>
            <!--carte scripte-->
            <script>
                document.querySelector('#card').onmouseenter = () =>{
                document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
                document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
                }

                document.querySelector('#card').onmouseleave = () =>{
                document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
                document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
                }
            </script>
            <!--End card sceripte-->

    </div>
    

    <!--End card client-->
    

    <script src="main.js"></script>
</body>
</html>