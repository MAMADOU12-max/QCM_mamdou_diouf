<?php
//fonction commun
function verifyinput($var) //good
    {
        $var = trim($var);  //enleve les espaces supplementaires dans notre formulaire
        $var = stripslashes($var); //les enleves tt les anti-slash
        $var = htmlspecialchars($var); // nous protege contre la faille xxs 
           return $var; 
    }
//fonction permettant de confirmer un un nom et un prenom
function is_nom($nom) //good
{
    $masque='#^[A-Z][a-z]{2,}[a-z]$#';
    if(preg_match($masque ,$nom))
    {
        return true;
    
    }
    else
    {
        return false;
    }
} 
   
//fonction qui permet de verifier un numero 
function is_numero($num) //good
{
    $masque = '#^7[7860]([-. ]?[0-9]{1}){7}$#';
    if(preg_match($masque, $num))
    {
        return true;
    }
    else{ return false;}

}

function is_address($mis)  //good
{
    if(preg_match('#^[A-Za-z][0-9]{?}[\s]#',$mis))
    {
        return true;
    }
    else{ return false; }
  }

  //is login et is password a chercher