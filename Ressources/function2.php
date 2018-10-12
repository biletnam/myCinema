<?php
include_once "function1.php";
include_once "function3.php";

function printHTML($donnees, $bdd) {
    ?><tr>
            <td scope="row"><?= $donnees['nom'];?></td><td scope="row"><?= $donnees['prenom'];?></td><td scope="row"><?= $donnees['id_perso'];?></td>
            <td>
            <form action="" method="post">
                <input type="hidden" name="id_abo" value="<?= $donnees['id_abo']?>"><input type="hidden" name="id_perso" value="<?= $donnees['id_perso']?>">
                <select name="abonnement" class="custom-select">
                <?php
                $sql2 = 'SELECT nom,id_abo FROM abonnement;';
                $reponse2 = $bdd->query($sql2)->fetchAll();
                    foreach($reponse2 as $value){?>
                        <option <?php
                            if($value['id_abo'] == $donnees['id_abo']){?> selected<?php
                        }?>
                        value="<?= $value['id_abo'];?>"><?= $value['nom'];?></option><?php
                    }
                ?></select></td>
            <td scope="row">
            <input class="btn btn-default btn-sm" type="submit" value="New Request" name="submit1"></td><td scope="row"><input class="btn btn-default btn-sm" type="submit" value="Delete" name="submit2"></td></form>
            <td scope="row"><a href="seehistory.php?id=<?= $donnees['id_perso']?>"> See History</a></td></tr><?php
}
    function AfficherMembre1()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
        $sql = 'SELECT fiche_personne.nom,fiche_personne.prenom,fiche_personne.id_perso,membre.id_abo,abonnement.nom
        AS Abo FROM membre LEFT JOIN fiche_personne ON membre.id_fiche_perso = fiche_personne.id_perso LEFT JOIN
        abonnement ON  membre.id_abo = abonnement.id_abo WHERE fiche_personne.nom
        LIKE "%'.$_POST['nom'].'%" AND fiche_personne.prenom LIKE "%'.$_POST['prenom'].'%";';
        $reponse1 = $bdd->prepare($sql);
        $reponse1->execute();
        while($donnees = $reponse1->fetch()){
            printHTML($donnees, $bdd);
        }
    }

    if (isset($_POST['abonnement'])){
        $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
        $sql = "UPDATE membre SET id_abo = ".$_POST['abonnement']." WHERE id_fiche_perso = ".$_POST['id_perso'].";";
        $sql2 = "DELETE FROM MEMBRE WHERE id_fiche_perso = ".$_POST['id_perso'].";";
        $reponse=$bdd->prepare($sql);
        $reponse2=$bdd->prepare($sql2);
        if(isset($_POST['submit1'])){
            $reponse->execute();
        }
        elseif(isset($_POST['submit2'])){
            $reponse2->execute();
        }
    }
    function InsertOpinion($donnees,$i){
        $bdd= new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
        $sql = "INSERT INTO historique_membre (Opinion) VALUES (".$_POST['opinion'].");";
        $reponse = $bdd->prepare($sql);
        $reponse->execute();
    }


function AfficherHistorique1(){
    CreateOpinion();
    $bdd = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','');
    $sql = "SELECT DISTINCT historique_membre.id_membre,historique_membre.id_film, fiche_personne.nom,
    fiche_personne.prenom,film.titre,SUBSTR(historique_membre.date,1,11) AS 'Date',fiche_personne.id_perso FROM historique_membre
    LEFT JOIN membre ON membre.id_membre = historique_membre.id_membre LEFT JOIN film ON historique_membre.id_film = film.id_film
    LEFT JOIN fiche_personne ON membre.id_fiche_perso = fiche_personne.id_perso WHERE fiche_personne.id_perso = '".$_GET['id']."';";
    $reponse1 = $bdd->prepare($sql);
    $reponse1->execute();
    $donnees  = $reponse1->fetch();
    printhtml2($donnees,$reponse1);
}
function printhtml2($donnees,$reponse1){
    ?><p class="exception">Name : <?= $donnees['nom']?></p></br>
    <p class="exception">Surname : <?= $donnees['prenom']?></p></br>
    <table class="table table-light table-bordered table-hover table-striped">
        <thead class="thead-light">
            <tr>
                <th class="scope">Date</th>
                <th class="scope">Film</th>
                <th class="scope">Opinion</th>
            </tr></thead>
        <?php
        $i=0;
            while($donnees = $reponse1->fetch()){
                $i+=1;
                ?><tr><td class="scope"><?= $donnees['Date'];?></td>
                    <td class="scope"><?= $donnees['titre'];?></td>
                    <td class="scope"><form action ="<?php
                        if(isset($_POST['opinion'])){
                            InsertOpinion($donnees,$i);
                        }?>
                    " method="post">
                    <input type="hidden" name="titre<?php.$i.?>" value="<?=$donnees['titre']?>">
                    <button type="submit" class="btn btn-success btn-sm" value="Add +" ></button><textarea name="opinion">
                    <?php if (isset($_POST['opinion'])){
                            echo $_POST['opinion'];
                        }
                            else
                                echo "";?>
                    </textarea></form> </td></tr><?php
            }
}
?>