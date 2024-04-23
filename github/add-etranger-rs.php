<?php
require_once "database.php";
if(isset($_POST['valider-etranger-rs'])){
    $Direction=$_POST['direction-etranger'];
    $Departement=$_POST['departement-etranger'];
    $Demandeur=$_POST['demandeur-etranger']; 
    $CompteAnalytique=$_POST['compte-analytique-etranger']; 
    $NumDemande=$_POST['num-demande-etranger'];
    $DateDemande=$_POST['date-demande-etranger'];
    $Destinataire=$_POST['destinataire-etranger']; 
    $DateDu=$_POST['du-etranger'];
    $DateAu=$_POST['au-etranger'];
    $NombreDesJours=$_POST['nb-jours-etranger']; 
    $ObjetMission=$_POST['objet-mission-etranger'] ;
    $LieuMission=$_POST['lieu-mission-etranger'];
    $Pays=$_POST['pays-etranger'] ;
    $CadreMission=$_POST['cadre-mission-etranger'] ;
    $InformationComplementaire=$_POST['info-complement-etranger'] ;
    $NomMissionnaires=$_POST['missionnaires-etranger'] ;
    $SituationVisa=$_POST['situation-visa-etranger'] ;
    $InformationComplementaireVisa=$_POST['info-visa-etranger'] ;
    $ObjectifsMission=$_POST['objectifs-mission-etranger'] ;
    $OpportuniteMission=$_POST['opportunite-etranger'] ;
    $Etat=$_POST['etat-etranger-rs'];
 

    $sql = "INSERT INTO etranger (Direction, Departement, Demandeur, CompteAnalytique, NumDemande, DateDemande, Destinataire, DateDu, DateAu, NombreDesJours, ObjetMission, LieuMission, Pays, CadreMission, InformationComplementaire, NomMissionnaires, SituationVisa, InformationComplementaireVisa, ObjectifsMission, OpportuniteMission, Etat) 
    VALUES ('$Direction', '$Departement', '$Demandeur', '$CompteAnalytique','$NumDemande', '$DateDemande', '$Destinataire', '$DateDu', '$DateAu', '$NombreDesJours', '$ObjetMission', '$LieuMission','$Pays', '$CadreMission', '$InformationComplementaire', '$NomMissionnaires', '$SituationVisa', '$InformationComplementaireVisa', '$ObjectifsMission', '$OpportuniteMission', '$Etat')";
    
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Data inserted successfully!');</script>";
        echo "<script>window.location.replace('RS.php');</script>";
        exit();
    }else{
        echo "<script>alert('Something went wrong');</script>";
        echo "<script>window.location.replace('RS.php');</script>";
        exit();
    }

}
?>

<div class="content" id="table-etranger">
<form method="post">
    <p class="header-text">Ajouter une demande à l'étranger</p>

        <div class="container-kr">
            <label for="direction-etranger">
                Direction
                <input type="text" name="direction-etranger">
            </label><!-- <br><br> -->
            
            <label for="departement-etranger">
                Département
                <input type="text" name="departement-etranger">
            </label><!-- <br><br> -->

            <label for="demandeur-etranger">
                Demande effectuée par
                <input type="text" name="demandeur-etranger" value="<?php echo $_SESSION["username"]; ?>">
            </label><!-- <br><br> -->


            <label for="compte-analytique-etranger">
                Compte analytique
                <input type="text" name="compte-analytique-etranger">
            </label><!-- <br><br> -->

            <label>
            Num Demande 
            <input type="number" name="num-demande-etranger" value="1" min="1" required>
            </label>

            <label for="date-demande-etranger">
                Date de demande
                <input type="date" name="date-demande-etranger" value="<?php echo date('Y-m-d'); ?>">
            </label><!-- <br><br> -->

            <label for="destinataire-etranger">
                Destinataire
                <input type="text" name="destinataire-etranger" value="RELEX">
            </label>

            <label for="du-etranger">
                Date début           
                <input type="date" name="du-etranger" value="<?php echo date('Y-m-d'); ?>">
            </label>

            <label for="au-etranger">
                Date fin
                <input type="date" name="au-etranger" value="<?php echo date('Y-m-d'); ?>">
            </label><!-- <br><br> -->

            <label for="nb-jours-etranger">
                Nombre des jours
                <input type="number" name="nb-jours-etranger" value="1" min="1">
            </label><!-- <br><br> -->
        
            <label for="objet-mission-etranger">
                Objet de la mission
                <input type="text" name="objet-mission-etranger">
            </label><!-- <br><br> -->
            
            <label for="lieu-mission-etranger">
                Lieu de mission
                <input type="text" name="lieu-mission-etranger">
            </label>
            
            <label for="pays-etranger">
                Pays de mission
                <input type="text" name="pays-etranger">
            </label>
            
            <label for="cadre-mission-etranger">
                Cadre de la mission
                <select name="cadre-mission-etranger" >
                    <option value="">Contrat</option> 
                    <option value="">Plan de formation</option>
                    <option value="">Autre</option>
                </select><!-- <br><br> -->            
            </label>
            
            <label for="info-complement-etranger">
                Information complémentaire <!-- contrat N° if contrat -->
                <input type="text" name="info-complement-etranger">
            </label>
            
            <label for="missionnaires-etranger">
                Nom(s) et fonction du (des) missionnaire(s)
                <input type="text" name="missionnaires-etranger">
            </label>
            
            <label for="situation-visa-etranger">
                Situation visa
                <select name="situation-visa-etranger" >
                    <option value="">Obtenue pour tous les missionnaires</option> 
                    <option value="">En cours pour tous les missoinnaires</option>
                    <option value="">En cours pour une partie des missoinnaires</option>
                    <option value="">Autres</option>
                </select><!-- <br><br> -->            
            </label>
            
            <label for="info-visa-etranger">
                Information complémentaire visa
                <input type="text" name="info-visa-etranger">
            </label>
            
            <label for="objectifs-mission-etranger">
                Objectifs de la mission
                <input type="text" name="objectifs-mission-etranger">
            </label>
            
            <label for="opportunite-etranger">
                Opportunité Mission
                <input type="text" name="opportunite-etranger">
            </label>

            <input type="hidden"  name="etat-etranger-rs" readonly value="NON TRAITE" hidden>


        </div>


        <div class="boutons-kr">
            <button type="submit" class="btn-etranger" name="valider-etranger-rs">Valider</button>
            <button type="submit" class="btn-etranger" name="annuler-etranger-rs" >Annuler</button>
        </div>
    </form>
</div>