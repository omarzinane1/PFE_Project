
//chack  Admin 
//cree cilent 
document.getElementById("client_element").onclick = function(){
    
    document.getElementById("container2").style.display = " none ";
    

    document.getElementById("form_deposer").style.display = "none";
    document.getElementById("operation").style.display = "none";
    document.getElementById("card").style.display = "none";
    document.getElementById("accordion3_message").style.display = "none";
    document.getElementById("retirer").style.display = "none";
    document.getElementById("element_form").style.display = "block";
    
}
// retirer
document.getElementById("retirer_argent").onclick = function(){
    
    document.getElementById("container2").style.display = " none ";
    
    document.getElementById("element_form").style.display = "none";
    document.getElementById("operation").style.display = "none";
    document.getElementById("card").style.display = "none";
    
    document.getElementById("retirer").style.display = "block";
    
}
//list client
/*document.getElementById("client_element2").onclick = function(){
    
    document.getElementById("container2").style.display = " none ";

    document.getElementById("element_form").style.display = "none";
    
    document.getElementById("form_deposer").style.display = "none";
    document.getElementById("operation").style.display = "none";
    document.getElementById("card").style.display = "none";
    document.getElementById("accordion3_message").style.display = "none";
    document.getElementById("container1").style.display = " block ";
}*/
//container1 id pour client
// list admin 
document.getElementById("profile").onclick = function(){
    
    document.getElementById("element_form").style.display = "none";
    
    document.getElementById("form_deposer").style.display = "none";
    document.getElementById("operation").style.display = "none";
    document.getElementById("card").style.display = "none";
    document.getElementById("accordion3_message").style.display = "none";
    document.getElementById("retirer").style.display = "none";
    document.getElementById("container2").style.display = " block ";
}
//operation
document.getElementById("oper").onclick = function(){
    
    document.getElementById("container2").style.display = " none ";
    
    document.getElementById("element_form").style.display = "none";
    document.getElementById("form_deposer").style.display = "none";
    document.getElementById("card").style.display = "none";
    document.getElementById("accordion3_message").style.display = "none";
    document.getElementById("retirer").style.display = "none";
    document.getElementById("operation").style.display = "block";
}
//deposer
document.getElementById("deposer1").onclick = function(){
    
    document.getElementById("container2").style.display = " none ";
    

    document.getElementById("element_form").style.display = "none";
    document.getElementById("operation").style.display = "none";
    document.getElementById("card").style.display = "none";
    document.getElementById("accordion3_message").style.display = "none";
    document.getElementById("retirer").style.display = "none";
    document.getElementById("form_deposer").style.display = "block";
    
}
//retier
document.getElementById("retirer_argent").onclick = function(){
    
    document.getElementById("container2").style.display = " none ";
    

    document.getElementById("element_form").style.display = "none";
    document.getElementById("operation").style.display = "none";
    document.getElementById("card").style.display = "none";
    document.getElementById("accordion3_message").style.display = "none";
    document.getElementById("retirer").style.display = "block";
    
}
// card 
document.getElementById("card_client").onclick = function(){
    
    document.getElementById("container2").style.display = " none ";
    

    document.getElementById("element_form").style.display = "none";
    document.getElementById("operation").style.display = "none";
    document.getElementById("accordion3_message").style.display = "none";
    document.getElementById("retirer").style.display = "none";
    document.getElementById("card").style.display = "block";
    
}

//notification
const notification = document.getElementById("notification");
const notif= document.getElementById("notif");
notification.addEventListener("click",function(){
    notif.innerHTML="0";
});
/*<!--Message pour  les clients crée -->*/
document.getElementById("notification").onclick = function(){
    
    document.getElementById("container2").style.display = " none ";
    

    document.getElementById("element_form").style.display = "none";
    document.getElementById("operation").style.display = "none";
    document.getElementById("card").style.display = "none";
    document.getElementById("retirer").style.display = "none";
    document.getElementById("form_deposer").style.display = "none";
    document.getElementById("accordion3_message").style.display = "block";
    
    
}
//notification
/*<!--End Message pour  les clients crée -->*/
