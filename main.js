// get Transaction type
const transactType=document.querySelector("#transact-type");
// get Transaction form
const paymentcard= document.querySelector(".payment-card");
const transactcard= document.querySelector(".transfer-card");
//chack for Transaction type event listener:
transactType.addEventListener("change",function(event){
//chack for Transaction type and display forms: balti run lik hadik form 
switch(transactType.value){
    case "Paiement":
        transactcard.style.display= "none";
        paymentcard.style.display= "block";
        //paymentcard.nextElementSibling.style.display = "none";
        
        break;
    case "transfert":
        //transactcard.previousElementSibling.style.display= "none";
        paymentcard.style.display= "none";
        transactcard.style.display= "block";
        //transactcard.nextElementSibling.style.display = "none";
        break;
    /*case "deposer":
        paymentcard.style.display= "none";
        depositCard.previousElementSibling.style.display= "none";
        depositCard.style.display= "block";
        depositCard.nextElementSibling.style.display = "none";
        break;
    case "retirer":
        retirerCard.previousElementSibling.style.display= "none";            
        retirerCard.style.display= "block";
        transactcard.style.display= "none";
        paymentcard.style.display= "none";
        
        break;*/

}
//End chack for Transaction type and display forms:
});
//End chack for Transaction type event listener:




