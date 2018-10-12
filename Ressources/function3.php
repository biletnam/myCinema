<?php
include_once "function2.php";

function CreateOpinion(){
    $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
    $sql = 'ALTER TABLE historique_membre ADD Opinion TEXT;';
    $reponse = $bdd->prepare($sql);
    $reponse->execute();
    $reponse->closeCursor();
}
function RequestMember2(){
    $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
    $sql = 'SELECT DISTINCT historique_membre.id_membre,historique_membre.id_film, fiche_personne.nom,
    fiche_personne.prenom,film.titre,film.annee_prod FROM historique_membre LEFT JOIN film ON historique_membre.id_film=film.id_film
    LEFT JOIN membre ON membre.id_membre = historique_membre.id_membre LEFT JOIN fiche_personne
    ON membre.id_fiche_perso = fiche_personne.id_perso WHERE fiche_personne.nom
    LIKE "%'.$_POST['nom'].'%" AND fiche_personne.prenom LIKE "%'.$_POST['prenom'].'%";';
}
?>