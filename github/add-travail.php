<?php
require_once "database.php";
if(isset($_POST['valider-travail'])){
    $Direction=$_POST['direction-travail'];
    $Departement=$_POST['departement-travail'];
    $Demandeur=$_POST['demande-dffuctuee-par-travail']; 
    $CompteAnalytique=$_POST['compte-analytique-travail']; 
    $NumDemande=$_POST['num-demande-travail'];
    $DateDemande=$_POST['date-demande-travail'];
    $Destinataire=$_POST['destinataire-travail']; 
    $DateDu=$_POST['du-travail'];
    $DateAu=$_POST['au-travail'];
    $RegionDeroulementMission=$_POST['region-deroulement-mission-travail']; 
    $LieuMission=$_POST['lieu-de-la-mission-travail'];
    $Itineraire=$_POST['itineraire-travail'] ;
    $ObjetMission=$_POST['objet-de-la-mission-travail'] ;
    $NomMissionnaires=$_POST['noms-des-missionaires-travail'] ;
    $MoyenTransportAller=$_POST['moyen-de-transport-aller-travail'] ;
    $MoyenTransportRetour=$_POST['moyen-de-transport-retour-travail'] ;
    $DemandeHebergement=$_POST['demande-hebergement-travail'] ;
    $DemandeVehiculeServiceAller=$_POST['demande-vehicule-service-aller-travail'] ;
    $DemandeVehiculeServiceRetour=$_POST['demande-vehicule-service-retour-travail'];
    $PointDepart=$_POST['point-de-depart-travail'] ;
    $DemandeHebergementAller=$_POST['demande-hebergement-aller-travail'] ;
    $NombreNuitesTrajetAller=$_POST['nombre-de-nuite-du-trajet-aller-travail'] ;
    $PointRetour=$_POST['point-de-retour-travail'] ;
    $DemandeHebergementRetour=$_POST['demande-hebergement-retour-travail'] ;
    $NombreNuitesTrajetRetour=$_POST['nombre-de-nuite-du-trajet-retour-travail'] ;
    $BesoinAutorisationTransportProduitsDangereux=$_POST['besoin-autorisation-transport-produits-dangereux-travail'] ;
    $TypeProduits=$_POST['type-produits-travail']; 
    $DemandeAcheminementMateriel=$_POST['demande-acheminement-du-materiel-travail'] ;
    $TypeAcheminementMateriel=$_POST['type-acheminement-du-materiel-travail'] ;
    $Observation=$_POST['observation-travail'] ;
    $Etat=$_POST['etat-travail'];

    $sql = "INSERT INTO travail (Direction, Departement, Demandeur, CompteAnalytique, NumDemande, DateDemande, Destinataire, DateDu, DateAu, RegionDeroulementMission, LieuMission, Itineraire, ObjetMission, NomMissionnaires, MoyenTransportAller, MoyenTransportRetour, DemandeHebergement, DemandeVehiculeServiceAller, DemandeVehiculeServiceRetour, PointDepart, DemandeHebergementAller, NombreNuitesTrajetAller, PointRetour, DemandeHebergementRetour, NombreNuitesTrajetRetour, BesoinAutorisationTransportProduitsDangereux, TypeProduits, DemandeAcheminementMateriel, TypeAcheminementMateriel, Observation, Etat) 
    VALUES ('$Direction', '$Departement', '$Demandeur', '$CompteAnalytique','$NumDemande', '$DateDemande', '$Destinataire', '$DateDu', '$DateAu', '$RegionDeroulementMission', '$LieuMission', '$Itineraire', '$ObjetMission', '$NomMissionnaires', '$MoyenTransportAller', '$MoyenTransportRetour', '$DemandeHebergement', '$DemandeVehiculeServiceAller', '$DemandeVehiculeServiceRetour', '$PointDepart', '$DemandeHebergementAller', '$NombreNuitesTrajetAller', '$PointRetour', '$DemandeHebergementRetour', '$NombreNuitesTrajetRetour', '$BesoinAutorisationTransportProduitsDangereux', '$TypeProduits', '$DemandeAcheminementMateriel', '$TypeAcheminementMateriel', '$Observation', '$Etat')";
    
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

<?php
$sql = "SELECT * FROM `users` WHERE username = '" . $_SESSION["username"] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="content" id="table-travail">
    <form method="post">
    <p class="header-text">Ajouter une demande de mission du terrain</p>

    <div class="container-kr">
        <!-- <div class="fixed-form-head"> -->
            <label >
                Direction
                <input type="text"  name="direction-travail" value="<?php echo $row['direction'];?>" readonly>
            </label>
                                                    

            <label >
                Département 
                <input type="text"  name="departement-travail" value="<?php echo $row['Departement']?>" readonly>
            </label>


            <label >
                Demande effuctuée par 
                <input type="text" name="demande-dffuctuee-par-travail" value="<?php echo $_SESSION["username"]; ?>" readonly>
            </label>
                                                    

            <label >
                Compte Analytique
                <input type="text" id="text4" name="compte-analytique-travail" value="<?php echo $row['CompteAnalytique'];?>" readonly>
            </label>
                                                    

            <label>
                Num Demande 
                <input type="number" name="num-demande-travail" value="1" min="1" required>
            </label>



            <label >
                Date Demande 
                <input type="date"  name="date-demande-travail" value="<?php echo date('Y-m-d'); ?>" readonly>
            </label>

        

        <!-- </div> -->
        
                                            
        <!-- <div class="secondformdiv"> -->

            <label >
                Destinataire 
                <input type="text"  name="destinataire-travail" readonly value="RELEX">
            </label>
            
            <label>
                Date début           
                <input type="date" name="du-travail" value="<?php echo date('Y-m-d'); ?>">
            </label>

            <label>
                Date fin          
                <input type="date" name="au-travail" value="<?php echo date('Y-m-d'); ?>">
            </label>
                                                    

            <label>
                Region deroulement mission
                <select id="select1" name="region-deroulement-mission-travail">
                    <option value="nord">NORD</option>
                    <option value="sud">SUD</option>
                    <option value="est">EST</option>
                    <option value="ouest">OUEST</option>
                </select>
            </label>
                                                    
            <label >
                lieu de la mission 
                <input type="text" name="lieu-de-la-mission-travail">
            </label>
                                                    

            <label >
                Itineraire
                <input type="text" name="itineraire-travail">
            </label>

            <label >
                objet de la mission
                <input type="text" name="objet-de-la-mission-travail">
            </label>
                                                    

            <label>
                Nom(s) du(des) missionaire(s)
                <input type="text" name="noms-des-missionaires-travail">
            </label>


            <label >
                Moyen de Transport aller 
                <select  name="moyen-de-transport-aller-travail">
                    <option>Avion</option>
                    <option>Vehicule</option>
                </select>
            </label>
                
            <label >
                Moyen de transport retour 
                <select  name="moyen-de-transport-retour-travail">
                    <option>Avion</option>
                    <option>Vehicule</option>
                </select>
            </label>
                                                    

            
        <!-- </div> -->
        
    <!-- </div> -->
                                   
    <fieldset>
        <legend>Aller</legend>
        <div class="aller">
            <label for="text10">
                Demande Vehicule service aller 
                <select  name="demande-vehicule-service-aller-travail">
                    <!-- <option></option>  -->
                    <option>Oui</option> 
                    <option>Non</option>
                </select>
            </label>


            <label>
                Point de depart
                <input type="text" name="point-de-depart-travail">
            </label>


            <label>
                Demande hebergement aller
                <select  name="demande-hebergement-aller-travail">
                    <option>Oui</option> 
                    <option>Non</option>
                </select>
            </label>


            <label >
                nombre de nuite du trajet - Aller
                <input type="number" name="nombre-de-nuite-du-trajet-aller-travail" value="0" min="0">
            </label>
        </div>

    </fieldset>


    <fieldset>
        <legend>Retour</legend>

        <div class="retour">
            <label for="text10">
                Demande Vehicule service Retour 
                <select  name="demande-vehicule-service-retour-travail">
                    <option>Oui</option> 
                    <option>Non</option>
                </select>
            </label>

            <label>
                Point de retour
                <input type="text"  name="point-de-retour-travail">
            </label>

            <label>
                Demande hebergement Retour
                <select  name="demande-hebergement-retour-travail">
                                                                
                    <option>Oui</option> 
                    <option>Non</option>
                </select>
            </label>

            <label >
                nombre de nuite du trajet - Retour
                <input type="number" id="text13" name="nombre-de-nuite-du-trajet-retour-travail" value="0" min="0" >
            </label>
        </div>
    </fieldset>

    <label >
                Demande hebergement
                <select  name="demande-hebergement-travail">
                    <!-- <option> </option>  -->
                    <option>Oui</option> 
                    <option>Non</option>
                </select>
    </label>

    <div class="observation-travail">
        <!-- <label for="besoin-autorisation-transport-produits-dangereux-travail">
            Besoin Autorisation Transport Produits Dangereux
            <select  name="besoin-autorisation-transport-produits-dangereux-travail">
                                                        
                <option>Oui</option> 
                <option>Non</option>
            </select>
        </label><br>

        <label for="type-produits-travail">
            Type Produits
            <input type="text" name="type-produits-travail">
        </label>

        <label for="demande-acheminement-du-materiel-travail">
            Demande Acheminement du materiel
            <select  name="demande-acheminement-du-materiel-travail">
                
                <option>Oui</option> 
                <option>Non</option>
            </select>
        </label><br>

        <label for="type-acheminement-du-materiel-travail">
            Type Acheminement du materiel
            <input type="text" name="type-acheminement-du-materiel-travail">
        </label>
 -->

        <label for="observation-travail">
            Observation
            <input type="text" name="observation-travail">
        </label>

        <input type="hidden"  name="etat-travail" readonly value="NON TRAITE" hidden>

    </div>

 
            
</div>

    <div class="boutons-kr">
        <button type="submit" class="btn-travail" name="valider-travail">Valider</button>

        <button type="submit" class="btn-travail" name="annuler-travail" >Annuler</button>
    </div>

<!-- </div> -->
</form>

</div>