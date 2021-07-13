<?php

    include("connexion.php"); 

     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $date = $_POST['date'];
     $lieu = $_POST['lieu'];
     $cni = $_POST['cni'];
     $ine = $_POST['ine'];
     $numCarte = $_POST['nce'];
     $paysNation = $_POST['pays'];
     $nationalite = $_POST['nat'];

     $addrPrin = $_POST['adr'];
     $addrSecond = $_POST['adr1'];
     $email = $_POST['email'];
     $telPort = $_POST['telP'];
     $telFix = $_POST['telF'];
     $mailPers = $_POST['emlP'];
     $mailInst = $_POST['amlI'];
     $boitePost = $_POST['bp'];

     $nom = $_POST['nom1'];
     $prenom = $_POST['prenom1'];
     $telportable = $_POST['telport']; 
     $telfixe = $_POST['telfix'];
     $mailPers = $_POST['mailpers'];
     $boitePost = $_POST['boite'];
     $fax = $_POST['fax'];
     $responsable = $['res'];
     $personne = $_POST['pers'];

     if (isset($_POST['nom']) && isset($_POST['prenom'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];

        if (empty($nom) || empty($prenom))
        {
            echo "Merci de remplir les champs nom et prenom";
            echo '<a href="formulaire.html?error=$erreur">Retour au formulaire</a>';
        }
        else {

            echo $prenom. ' ' .$nom;
        }

     }

     $test = $bdd -> query('select nationalite from identification where nationalite = "$nationalite" ');

     try 
     {
         $req1 = $bdd->prepare("insert into identification values (:nom, :prenom, :civilite, :dateNaissance, :lieuNaissance, :cni, :ine, :numCarteEtude, :paysNationalite, :nationalite)");
         
         $req1->execute((array
             ':nom' => $nom,
             ':prenom' => $prenom,
             ':civilite' =>,
             ':dateNaissance' => $date,
             ':lieuNaissance' => $lieu,
             ':cni' => $cni,
             ':ine' => $ine,
             ':numCarteEtude' => $numCarte,
             ':paysNationalite' => $paysNation,
             ':nationalite' => $nationalite
        )); 

        echo "insertion réussie";
     }

     catch (Exception $e)
     {
        die('Erreur d''insertion :' . $e->getMessage());
     }


     $req2 = $bdd->prepare("insert into adresseactuelle (':AdressePrincipale', ':AdresseSecondaire', ':Email', 'telephonePortable', ':telephoneFixe', ':emailPersonnel', ':emailInstitutionnel', ':boitePostal')");
     $req2 = $bdd->prepare("insert into emploi (':activiteSalaire', ':statutEtudiant', ':categorieSocioPro')");
     $req2 = $bdd->prepare("insert into situationfamiliale ('situationMatrimoniale', ':nombreEnfants')");
     $req2 = $bdd->prepare("insert into bourses (':bourse', ':natureBourse', ':montantBourse')");
     $req2 = $bdd->prepare("insert into contact (':nom', ':prenom', ':telPort', ':telFix', ':mailPers', ':boitePost', ':fax', ':responsable', ':personneContact')");


     
      

?>