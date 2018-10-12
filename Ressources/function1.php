<?php
function ConnectDataBase(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
    }
    catch(Exception $e){
        die('Error : '.$e->getMessage());
    }
    return $bdd;
}
function AfficherFilm1(){
    $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
    $sql = 'SELECT titre,resum,annee_prod,duree_min,distrib.nom AS distrib,genre.nom AS genre FROM film
            LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib LEFT JOIN genre ON film.id_genre= genre.id_genre
            WHERE titre LIKE "%'.$_POST['film'].'%";';
    $reponse1 = $bdd->query($sql);
        //$donnees = $reponse1->fetch();
    while($donnees = $reponse1->fetch()){
        ?>
        <tr>
        <td scope="row"><?php echo $donnees['titre'];?></td>
        <td><?php echo $donnees['distrib'];?></td>
        <td><?php echo $donnees['genre'];?></td>
        <td><?php echo $donnees['duree_min'];?></td>
        <td><?php echo $donnees['annee_prod'];?></td>
        </tr>
        <?php
    }
}
function AfficherFilm2(){
    $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
        $sql = 'SELECT titre,resum,annee_prod,duree_min,distrib.nom AS distrib,genre.nom AS genre FROM film LEFT JOIN
                distrib ON film.id_distrib = distrib.id_distrib LEFT JOIN genre ON film.id_genre = genre.id_genre
                WHERE film.id_distrib ='.$_POST['distributor'].' AND titre LIKE "%'.$_POST['film'].'%";';
        $reponse1 = $bdd->query($sql);
        //$donnees = $reponse1->fetch();
        while($donnees = $reponse1->fetch()){
            ?>
            <tr>
            <td scope="row"><?php echo $donnees['titre'];?></td>
            <td><?php echo $donnees['distrib'];?></td>
            <td><?php echo $donnees['genre'];?></td>
            <td><?php echo $donnees['duree_min'];?></td>
            <td><?php echo $donnees['annee_prod'];?></td>
            </tr>
            <?php
        }
}
function AfficherFilm3(){
    $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
        $sql = 'SELECT titre,resum,annee_prod,duree_min,distrib.nom AS distrib ,genre.nom AS genre FROM film
                LEFT JOIN genre ON film.id_genre = genre.id_genre LEFT JOIN distrib
                ON film.id_distrib = distrib.id_distrib WHERE film.id_genre ='.$_POST['genre'].'
                AND titre LIKE "%'.$_POST['film'].'%";';
        $reponse1 = $bdd->query($sql);
       // $donnees = $reponse1->fetch();
       while($donnees = $reponse1->fetch()){
            ?>
            <tr>
            <td scope="row"><?php echo $donnees['titre'];?></td>
            <td><?php echo $donnees['distrib'];?></td>
            <td><?php echo $donnees['genre'];?></td>
            <td><?php echo $donnees['duree_min'];?></td>
            <td><?php echo $donnees['annee_prod'];?></td>
            </tr>

            <?php
        }
}
function AfficherFilm4(){
    $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
    $sql = 'SELECT titre,resum,annee_prod,duree_min,distrib.nom AS distrib,genre.nom AS genre FROM film LEFT JOIN
            genre ON film.id_genre = genre.id_genre LEFT JOIN distrib ON film.id_distrib = distrib.id_distrib
            WHERE film.id_distrib='.$_POST['distributor'].' AND
            film.id_genre='.$_POST['genre'].' AND titre LIKE "%'.$_POST['film'].'%";';
    $reponse1 = $bdd->query($sql);
    while($donnees = $reponse1->fetch()){
        ?>
        <tr>
        <td scope="row"><?php echo $donnees['titre'];?></td>
        <td><?php echo $donnees['distrib'];?></td>
        <td><?php echo $donnees['genre'];?></td>
        <td><?php echo $donnees['duree_min'];?></td>
        <td><?php echo $donnees['annee_prod'];?></td>
        </tr>
        <?php
        }
}
?>