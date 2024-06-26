<?php
require_once "database.php";
if(isset($_POST['valider-etrangerF'])){
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
    $Etat=$_POST['etat-etranger-form'];
 

    $sql = "INSERT INTO etranger (Direction, Departement, Demandeur, CompteAnalytique, NumDemande, DateDemande, Destinataire, DateDu, DateAu, NombreDesJours, ObjetMission, LieuMission, Pays, CadreMission, InformationComplementaire, NomMissionnaires, SituationVisa, InformationComplementaireVisa, ObjectifsMission, OpportuniteMission, Etat) 
    VALUES ('$Direction', '$Departement', '$Demandeur', '$CompteAnalytique','$NumDemande', '$DateDemande', '$Destinataire', '$DateDu', '$DateAu', '$NombreDesJours', '$ObjetMission', '$LieuMission','$Pays', '$CadreMission', '$InformationComplementaire', '$NomMissionnaires', '$SituationVisa', '$InformationComplementaireVisa', '$ObjectifsMission', '$OpportuniteMission', '$Etat')";
    
    
    if($DateDu < $DateAu){
        if($DateDu > $DateDemande) {
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Data inserted successfully!');</script>";
                echo "<script>window.location.replace('chef-formation.php');</script>";
                exit();
            }else{
                echo "<script>alert('Le numéro de la demande doit être unique.');</script>";
                echo "<script>window.location.replace('chef-formation.php');</script>";
                exit();
            }
        }else{
            echo "<script>alert('La date de départ doit être supérieure à la date actuelle.');</script>";
            echo "<script>window.location.replace('chef-formation.php');</script>";
            exit();
        }
    }else{
        echo "<script>alert('La date de départ doit être inferieur à la date de retour.');</script>";
            echo "<script>window.location.replace('chef-formation.php');</script>";
            exit();
    }

}
?>
<?php
$sql = "SELECT * FROM `users` WHERE username = '" . $_SESSION["username"] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>
<div class="content" id="table-etranger">
<form method="post">
    <p class="header-text">Ajouter une demande à l'étranger</p>

        <div class="container-kr">
            <label for="direction-etranger">
                Direction
                <input type="text" name="direction-etranger" value="<?php echo $row['direction'];?>" readonly>
            </label>
            
            <label for="departement-etranger">
                Département
                <input type="text" name="departement-etranger" value="<?php echo $row['Departement']?>" readonly>
            </label>

            <label for="demandeur-etranger">
                Demande effectuée par
                <input type="text" name="demandeur-etranger" value="<?php echo $_SESSION["username"]; ?>" readonly>
            </label>


            <label for="compte-analytique-etranger">
                Compte analytique
                <input type="text" name="compte-analytique-etranger" value="<?php echo $row['CompteAnalytique'];?>"  readonly>
            </label>

            <label>
                Num Demande 
                <input type="number" name="num-demande-etranger" value="1" min="1" required>
            </label>

            <label for="date-demande-etranger">
                Date de demande
                <input type="date" name="date-demande-etranger" value="<?php echo date('Y-m-d'); ?>" readonly>
            </label>

            <label for="destinataire-etranger">
                Destinataire
                <input type="text" name="destinataire-etranger" value="RELEX" readonly>
            </label>

            <label for="du-etranger">
                Date début           
                <input type="date" name="du-etranger" value="<?php echo date('Y-m-d'); ?>">
            </label>

            <label for="au-etranger">
                Date fin
                <input type="date" name="au-etranger" value="<?php echo date('Y-m-d'); ?>">
            </label>

            <label for="nb-jours-etranger">
                Nombre des jours
                <input type="number" name="nb-jours-etranger" value="0" min="0">
            </label>
        
            <label for="objet-mission-etranger">
                Objet de la mission
                <input type="text" name="objet-mission-etranger">
            </label>
            
            
            <label for="lieu-mission-etranger">
                Lieu de mission
                <input type="text" name="lieu-mission-etranger">
            </label>
            
            <label for="pays-etranger">
                Pays de formation  
                <input type="text" name="pays-etranger">
            </label>
            
            <label for="cadre-mission-etranger">
                Cadre de la mission
                <select name="cadre-mission-etranger" >
                    <option value="Contrat">Contrat</option> 
                    <option value="Plan de formation">Plan de formation</option>
                    <option value="Autre">Autre</option>
                </select>            
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
                <select name="situation-visa-etranger">
                    <option value="Obtenue pour tous les missionnaires">Obtenue pour tous les missionnaires</option> 
                    <option value="En cours pour tous les missionnaires">En cours pour tous les missionnaires</option>
                    <option value="En cours pour une partie des missionnaires">En cours pour une partie des missionnaires</option>
                    <option value="Autres">Autres</option>
                </select>            
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

            <input type="hidden"  name="etat-etranger-form" readonly value="NON TRAITE" hidden>


        </div>


        <div class="boutons-kr">
            <button type="submit" class="btn-etranger" name="valider-etrangerF">Valider</button>
            <button type="submit" class="btn-etranger" name="annuler-etrangerF" >Annuler</button>
        </div>
    </form>
</div>