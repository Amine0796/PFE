<?php
require_once "database.php";

if(isset($_POST['valider-formation'])){
    $Direction=$_POST['direction-formation'];
    $Departement=$_POST['departement-formation'];
    $Demandeur=$_POST['demande-dffuctuee-par-formation']; 
    $CompteAnalytique=$_POST['compte-analytique-formation']; 
    $NumDemande=$_POST['num-demande-formation'];
    $DateDemande=$_POST['date-demande-formation'];
    $Destinataire=$_POST['destinataire-formation']; 
    $DateDu=$_POST['du-formation'];
    $DateAu=$_POST['au-formation'];
    $RegionDeroulementFormation=$_POST['region-deroulement-formation']; 
    $LieuFormation=$_POST['lieu-formation'];
    $Itineraire=$_POST['itineraire-formation'] ;
    $ObjetFormation=$_POST['objet-formation'] ;
    $DemandeHebergement=$_POST['demande-hebergement-formation'] ;
    $DemandeBilletterie=$_POST['demande-billet-formation'] ;
    $OrganismeFormateur=$_POST['organisme-formateur'] ;
    $NomMissionnaires=$_POST['noms-missionaires-formation'] ;
    $MoyenTransportAller=$_POST['moyen-transport-aller-formation'] ;
    $MoyenTransportRetour=$_POST['moyen-transport-retour-formation'] ;
    $DemandeVehiculeServiceAeroport=$_POST['demande-vehicule-aeroport-formation'] ;
    $PointDepartAvion=$_POST['point-depart-avion-formation'];
    $DemandeVehiculeLieuFormation=$_POST['demande-vehicule-formation'] ;
    $PointDepartVehicule=$_POST['point-depart-vehicule-formation'] ;
    $Observations=$_POST['observation-formation'] ;
    $Etat=$_POST['etat-formation'];


 

    $sql = "INSERT INTO Formation (Direction, Departement, Demandeur, CompteAnalytique, NumDemande, DateDemande, Destinataire, DateDu, DateAu, RegionDeroulementFormation, LieuFormation, Itineraire, ObjetFormation, DemandeHebergement, DemandeBilletterie, OrganismeFormateur, NomMissionnaires, MoyenTransportAller, MoyenTransportRetour, DemandeVehiculeServiceAeroport, PointDepartAvion, DemandeVehiculeLieuFormation, PointDepartVehicule, Observations, Etat) 
    VALUES ('$Direction', '$Departement', '$Demandeur', '$CompteAnalytique','$NumDemande', '$DateDemande', '$Destinataire', '$DateDu', '$DateAu', '$RegionDeroulementFormation', '$LieuFormation', '$Itineraire', '$ObjetFormation', '$DemandeHebergement', '$DemandeBilletterie', '$OrganismeFormateur', '$NomMissionnaires', '$MoyenTransportAller', '$MoyenTransportRetour', '$DemandeVehiculeServiceAeroport', '$PointDepartAvion', '$DemandeVehiculeLieuFormation', '$PointDepartVehicule', '$Observations', '$Etat')";
    
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Data inserted successfully!');</script>";
        echo "<script>window.location.replace('chef-formation.php');</script>";
        exit();
    }else{
        // Display specific error message
        echo "<script>alert('Something went wrong try again');</script>";
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

<div class="content" id="table-formation">
    <form method="post">
    <p class="header-text">Ajouter une demande de formation</p>
        <div class="container-kr">
            <label for="direction-formation">
                Direction
                <input type="text" name="direction-formation" value="<?php echo $row['direction'];?>" readonly>
            </label><!-- <br><br> -->
            
            <label for="departement-formation">
                Département
                <input type="text" name="departement-formation" value="<?php echo $row['Departement'];?>" readonly>
            </label><!-- <br><br> -->

            <label for="demande-dffuctuee-par-formation">
                Demande effectuée par
                <input type="text" name="demande-dffuctuee-par-formation" value="<?php echo $_SESSION["username"]; ?>" readonly>
            </label><!-- <br><br> -->

            <label for="compte-analytique-formation">
                Compte analytique
                <input type="text" name="compte-analytique-formation" value="<?php echo $row['CompteAnalytique'];?>" readonly>
            </label><!-- <br><br> -->

            <label>
                Num Demande 
                <input type="number" name="num-demande-formation" value="1" min="1" required>
            </label>

            <label for="date-demande-formation">
                Date de demande
                <input type="date" name="date-demande-formation" value="<?php echo date('Y-m-d'); ?>" readonly>
            </label><!-- <br><br> -->

            <label for="destinataire-formation">
                Destinataire
                <input type="text" name="destinataire-formation" value="RELEX" readonly>
            </label>

            <label for="du-formation">
                Date début 
                <input type="date" name="du-formation" value="<?php echo date('Y-m-d'); ?>">
            </label>

            
            <label for="au-formation">
                Date fin
                <input type="date" name="au-formation" value="<?php echo date('Y-m-d'); ?>">
            </label><!-- <br><br> -->

            <label for="region-deroulement-formation">
                Région deroulement formation
                <select name="region-deroulement-formation" >
                    <option value="nord">NORD</option>
                    <option value="sud">SUD</option>
                    <option value="est">EST</option>
                    <option value="ouest">OUEST</option>
                </select><!-- <br><br> -->
            </label>
            
    
            <label for="lieu-formation">
                lieu de la formation 
                <input type="text" name="lieu-formation" >
            </label>
            
    
            <label for="itineraire-formation">
                Itineraire
                <input type="text" name="itineraire-formation">
            </label>
    
            <label for="objet-formation">
                Objet de la formation
                <input type="text" name="objet-formation">
            </label>
            
            <label for="demande-hebergement-formation">
                Demande hébergement
                <select name="demande-hebergement-formation" >
                    <option value="">Oui</option> 
                    <option value="">Non</option>
                </select><!-- <br><br> -->
            </label>

            <label for="demande-billet-formation">
                Demande billetterie
                <select name="demande-billet-formation" >
                    <option value="">Oui</option> 
                    <option value="">Non</option>
                </select><!-- <br><br> -->
            </label>

            <label for="noms-missionaires-formation">
                Nom(s) du(des) missionnaire(s)
                <input type="text" name="noms-missionaires-formation">
            </label>
            

            <label for="moyen-de-transport-aller-formation">
                Moyen de Transport aller 
                <select name="moyen-transport-aller-formation" >
                    <option value="">Avion</option>
                    <option value="">Vehicule</option>
                </select><!-- <br><br> -->
            </label>
            

            <label for="moyen-de-transport-retour-formation">
                Moyen de transport retour 
                <select name="moyen-transport-retour-formation">
                    <option value="">Avion</option>
                    <option value="">Vehicule</option>
                </select><!-- <br><br> -->
            </label>
        

            <fieldset>
               <legend>Avion</legend>
               <div class="avion">
                    <label for="demande-vehicule-vers-aeroport-formation">
                        Demande Vehicule service vers l'aéroport 
                        <select name="demande-vehicule-aeroport-formation">
                            <!-- <option value=""></option> -->
                            <option value="">Oui</option> 
                            <option value="">Non</option>
                        </select><!-- <br><br> -->
                    </label>
                
    
                    <label for="point-de-depart-avion-formation">
                        Point du départ
                        <input type="text" name="point-depart-avion-formation">
                    </label>
               </div>
            </fieldset>
            
            <fieldset>
                <legend>Véhicule</legend>
                <div class="vehicule">
                    <label for="demande-vehicule-vers-formation">
                        Demande Vehicule vers lieu de formation 
                        <select name="demande-vehicule-formation">
                            <!-- <option value=""></option> -->
                            <option value="">Oui</option> 
                            <option value="">Non</option>
                        </select><!-- <br><br> -->
                    </label>
                
                    <label for="point-de-depart-vehicule-formation">
                        Point du départ
                        <input type="text" name="point-depart-vehicule-formation">
                    </label>
                </div>
            </fieldset>

            <label for="organisme-formateur">
                Organisme formateur
                <input type="text" name="organisme-formateur">
            </label>


            <label for="observation-formation">
                Observations
                <input type="text" name="observation-formation">
            </label>

            <input type="hidden"  name="etat-formation" readonly value="NON TRAITE" hidden>

        </div>


        <div class="boutons-kr">
            <button type="submit" class="btn-formation" name="valider-formation">Valider</button>
            <button type="submit" class="btn-formation" name="annuler-formation" >Annuler</button>
        </div>
    </form>
</div>