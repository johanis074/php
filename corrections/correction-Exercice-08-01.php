<?php

// Utiliser form.php pour le formulaire
// Créer un formulaire avec en champ (nom,prenom,email,motdepasse,ville,pays)
/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 *  $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Nom non fourni';
           
 */if(empty($_POST['firstname']) && empty($_POST['nom']) && empty($_POST['email']) && empty($_POST['mdp']) && empty($_POST['city']) && empty($_POST['country'])){
    echo "champ a remplir";
 }else{
    echo  $_POST['firstname'];
    echo  $_POST['nom'];
    echo  $_POST['email'];
    echo  $_POST['mdp'];
    echo  $_POST['city'];
    echo  $_POST['country'];
 }
 $prenom = isset($_POST['firstname']) ? $_POST['prenom'] : 'Prénom non fourni';
 $nom = isset($_POST['nom']) ? $_POST['nom'] : 'Nom non fourni';
 $email = isset($_POST['email']) ? $_POST['email'] : 'Email non fourni';
 $password = isset($_POST['mdp']) ? $_POST['password'] : 'mot de passe non fourni';
 $town = isset($_POST['city']) ? $_POST['town'] : 'Ville non fourni';
 $pays = isset($_POST['country']) ? $_POST['pays'] : 'Pays non fourni';

/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de copier/coller le traitement de l'exercice 1)
 * 
 */
echo "<br>";
if(empty($_POST['firstname']) && empty($_POST['nom']) && empty($_POST['email']) && empty($_POST['mdp']) && empty($_POST['city']) && empty($_POST['country'])){
    echo "champ a remplir";
 }else{
    echo  htmlspecialchars($_POST['firstname']);
    echo  htmlspecialchars($_POST['nom']);
    echo  htmlspecialchars($_POST['email']);
    echo  htmlspecialchars($_POST['mdp']);
    echo  htmlspecialchars($_POST['city']);
    echo  htmlspecialchars($_POST['country']);
}