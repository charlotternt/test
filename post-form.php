<?php

if (isset( $_POST)){

   if(empty($_POST['name'])) {
                echo "Le champ Nom est vide";
            }else{
    }   
    if(empty($_POST['firstname'])) {
        echo "Le champ Prénom est vide";
    }else{

    if(empty($_POST['mail'])){
        echo "Le champ Email est vide";
    }else { 
        
    if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
            echo "L'adresse mail entrée est incorrecte";            
    }else{
    if(empty($_POST['phone'])) {
            echo "Le champ Téléphone est vide";
    }else{
    if(!preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['phone'])){
    echo "Le numéro de téléphone est incorrect";
    } else{
   
    $mail_to= "charlotterenault3@gmail.com";
    $mail_subject = "Information formulaire de contact";
    $name= $_POST['name'];
    $firstname = $_POST['firstname'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];

    $mail_message = "Détail.\n\n";
    $mail_message .= "Nom: ".$name."\n";
    $mail_message .= "Prénom: ".$firstname."\n";
    $mail_message .= "Email: ".$mail."\n";
    $mail_message .= "Telephone: ".$phone."\n";
   
    $headers = 'From: '.$mail."\r\n".
    
    $message = mail($mail_to, $mail_subject, $mail_message, $headers);

    
     if($message) {
        echo "<p>Message envoyé</p>";
           }    
         }
      } 
    }
   }
 }
}

?>

   