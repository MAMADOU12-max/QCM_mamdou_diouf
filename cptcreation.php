 <?php

// session_start() ;
// session_destroy() ;
// header('location:pageconnexion.php') ;
// exit ;


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="cptcreation1.css">
    </head>
    <body>
        <form action="" method = "post"> 

            
            </div><div id="container">
                <div id="header"></div>
        
                         <div id="image">
        
                             <div id="acceuil">
                            <h3>le plaisir de jouer</h3>
                            </div>
                            
                
                            <div id="zone">
                                <div id="entete">
                                    <div id="text"> <h4>créer et paramétrer vos quizz</h4></div>
                                    <div id="ressortir"><a id="clik" href="pageconnexion.php"> deconnexion</a></div>
                                </div>
        
                                <div id="deal">
                                    <div id="petit">
                                        <div id="img1">
                                            <img src="" alt="">
                                        </div>
                                        <div id="dessous1">
                                            <div id="liste"><a id="sk" href="">Listes des Questions</a></div>
                                            <label id="img2" for=""> <img src="images/icones/ic-liste.png" alt=""> </label>
                                            <div id="liste1"><a id="sk1" href="">Creer Admin</a></div>
                                            <label id="img2" for=""> <img src="images/icones/ic-ajout.png" alt=""> </label>  
                                            <div id="liste2"><a id="sk1" href="">Listes Joueurs</a></div>
                                            <label id="img2" for=""> <img src="images/icones/ic-liste.png" alt=""> </label>    
                                            <div id="liste3"><a id="sk1" href="">Creer Questions</a></div>
                                            <label id="img2" for=""> <img src="images/icones/ic-ajout.png" alt=""> </label>    
                                        </div>
                                    </div>
                                    <div id="grand">
                                        <div id="part1">
                                            <h5>s'inscrire</h5>
                                            <h6>Pour creer des quizz</h6>
        
                                            <div class="label">
                                            <label for="firsname">Prenom</label>
                                            </div>
        
                                            <div class="input">
                                            <input type="text" name="firstname">
                                            </div>
        
                                            <div class="label">
                                            <label for="name">Nom</label>
                                            </div>
        
                                            <div class="input">
                                            <input type="text" name="name">
                                            </div>
        
                                            <div class="label">
                                            <label for="login">Login</label>
                                            </div>
        
                                            <div class="input">
                                            <input type="text" name="login">
                                            </div>
        
                                            <div class="label">
                                            <label for="password">Password</label>
                                            </div>
        
                                            <div class="input">
                                            <input type="text" name="password">
                                            </div>
        
                                            <div class="label">
                                            <label for="confirmation">Confirmer password</label>
                                            </div>
        
                                            <div class="input">
                                            <input type="text" name="confirmation">
                                            </div>
                                                
        
                                        </div>
                                        <div id="part2">
        
                                        </div>
        
                                    </div>
        
                                </div>
                                       
                                     
                            </div> 
                        </div>
                        
                        
                      
                <div id="footer"></div>
                                            <div id="bod">
                                            <div id="dernier">
                                                <h7>Avatar</h7>
                                            </div>
                                            <div id="clik2">
                                                <button id="button2">Choisir un fichier</button>
                                            </div>
                                            <div id="clik3">
                                                <button id="button3" name="creer">Creer un compte</button>
                                            </div>
                                            </div>
         </form>
            
        </body>
        </html>
        <?php

        //     include("fonction.php");
        //     $name= $lastname = $login = $num = $num1 ="";
        //     $nameError= $lastnameError = $addressError = $numError = $num1Error ="";
        //     if(isset($_POST['valide']) && verifyinput(is_nom($_POST['name'])) &&  verifyinput(is_nom($_POST['firsnamde'])) && 
        //     verifyinput(is_numero($_POST['num'])) && /*verifyinput(is_same($_POST['num1'])) &&*/
        //      verifyinput(is_address($_POST['login'])) )    
        //     {

        //     }
        //     elseif(!is_nom($name)){ echo '<div style="position: relative; color: red; padding-left: 216px;
        //         top: -420px;> you must write a valid firstname </div>';}
        //    elseif(!is_nom($_POST['lastname'])){ echo '<div style="position: relative; color: red; padding-left: 215px;
        //            top: -340px;"> you must write a valid lastname </div>';}
        //    elseif(!is_nom($_POST['address'])){ echo '<div style="position: relative; color: red; padding-left: 215px;
        //            top: -254px;">I want know your address</div>';}
        //    elseif(!is_numero($_POST['num'])){ echo '<div style="position: relative; color: red; padding-left: 215px;
        //                top: -165px;"> give a right phone number</div>';}

        // // if(isset($_POST['name']))
        // // {
        // //     //effectuer une action
        // //     $message = array() ;
        // //     $message['name'] = $_POST['name'] ;
           
        // //     $message['firstname'] = $_POST['firstname'] ;
        // //     $message['login'] = $_POST['login'] ;
        // //     $message['password'] = $_POST['password'] ;
        // //     $message['confirmation'] = $_POST['confirmation'] ;
        // //     $message['date'] = date("d/m/Y à Hh:i") ;
        
        // //     $message['id'] = date("dmYHis") ;
        
        // //     $js = file_get_contents('messages.json') ; //permet d aller prendre le fichier et de le retourner la valeur de json
             
        // //     $js = json_decode($js, true) ;   //true nous permet de le convertir en tableau sinon on aura un objet
        // //                                     //decode transforme le fichier json en php
        // //     $js[] = $message ;        //on ajoute js dans le tableau
        
        // //     $js = json_encode($js) ;      //on transforme lelement en json
        
        // //     file_put_contents('messages.json', $js) ; //permet de mettre notre premier message dans le fichier json
        
            
            
        
        // // }
        //  