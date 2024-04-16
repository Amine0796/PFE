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

    $sql = "INSERT INTO demande_mission (Direction, Departement, Demandeur, CompteAnalytique, NumDemande, DateDemande, Destinataire, DateDu, DateAu, RegionDeroulementMission, LieuMission, Itineraire, ObjetMission, NomMissionnaires, MoyenTransportAller, MoyenTransportRetour, DemandeHebergement, DemandeVehiculeServiceAller, DemandeVehiculeServiceRetour, PointDepart, DemandeHebergementAller, NombreNuitesTrajetAller, PointRetour, DemandeHebergementRetour, NombreNuitesTrajetRetour, BesoinAutorisationTransportProduitsDangereux, TypeProduits, DemandeAcheminementMateriel, TypeAcheminementMateriel, Observation) 
    VALUES ('$Direction', '$Departement', '$Demandeur', '$CompteAnalytique','$NumDemande', '$DateDemande', '$Destinataire', '$DateDu', '$DateAu', '$RegionDeroulementMission', '$LieuMission', '$Itineraire', '$ObjetMission', '$NomMissionnaires', '$MoyenTransportAller', '$MoyenTransportRetour', '$DemandeHebergement', '$DemandeVehiculeServiceAller', '$DemandeVehiculeServiceRetour', '$PointDepart', '$DemandeHebergementAller', '$NombreNuitesTrajetAller', '$PointRetour', '$DemandeHebergementRetour', '$NombreNuitesTrajetRetour', '$BesoinAutorisationTransportProduitsDangereux', '$TypeProduits', '$DemandeAcheminementMateriel', '$TypeAcheminementMateriel', '$Observation')";
    
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
<div class="content" id="table-travail">
    <form method="post">
    <p class="header-text">Ajouter une demande de mission du terrain</p>

    <div class="container-kr">
        <label for="text1">
            Direction
            <input type="text"  name="direction-travail">
        </label>
                                                

        <label for="text2">
            Departement 
            <input type="text"  name="departement-travail">
        </label>


        <label for="text3">
            Demande Effuctuee Par 
            <input type="text" name="demande-dffuctuee-par-travail" value="<?php echo $_SESSION["username"]; ?>">
        </label>
                                                

        <label for="text4">
            Compte Analytique
            <input type="text" id="text4" name="compte-analytique-travail">
        </label>
                                                

        <label>
            Num Demande 
            <input type="text" name="num-demande-travail" required>
        </label>



        <label for="date1">
            Date Demande 
            <input type="date"  name="date-demande-travail" value="<?php echo date('Y-m-d'); ?>">
        </label>
                                                
                                                
        <label for="text5">
            Destinataire 
            <input type="text"  name="destinataire-travail">
        </label>
                                                
                                                
        <label for="date2">
            Du 
            <input type="date" name="du-travail" value="<?php echo date('Y-m-d'); ?>">
        </label>

        <label for="date3">
            Au
            <input type="date" name="au-travail" value="<?php echo date('Y-m-d'); ?>">
        </label>
                                                

        <label for="select1">
            Region deroulement mission
            <select id="select1" name="region-deroulement-mission-travail">
                <option>NORD</option>
                <option>SUD</option>
                <option>EST</option>
                <option>OUEST</option>
            </select>
        </label>
                                                
        <label for="text6">
            lieu de la mission 
            <input type="text" name="lieu-de-la-mission-travail">
        </label>
                                                

        <label for="text7">
            Itineraire
            <input type="text" name="itineraire-travail">
        </label>

        <label for="text8">
            objet de la mission
            <input type="text" name="objet-de-la-mission-travail">
        </label>
                                                

        <label for="text9">
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
                                                

        <label >
            Demande hebergement
            <select  name="demande-hebergement-travail">
                <!-- <option></option>  -->
                <option>Oui</option> 
                <option>Non</option>
            </select>
        </label>
                                                

        <div class="aller">
            <label for="text10">
                Demande Vehicule service aller 
                <select  name="demande-vehicule-service-aller-travail">
                    <!-- <option></option>  -->
                    <option>Oui</option> 
                    <option>Non</option>
                </select>
            </label>


            <label for="text12">
                Point de depart
                <input type="text" name="point-de-depart-travail">
            </label>


            <label for="text11">
                Demande hebergement aller
                <select  name="demande-hebergement-aller-travail">
                    <option>Oui</option> 
                    <option>Non</option>
                </select>
            </label>




                                                <label for="text13">
                                                    nombre de nuite du trajet - Aller
                                                    <input type="number" name="nombre-de-nuite-du-trajet-aller-travail" value="1">
                                                </label>
                                            </div>



                                            <div class="retour">
                                                <label for="text10">
                                                    Demande Vehicule service Retour 
                                                    <select  name="demande-vehicule-service-retour-travail">
                                                        
                                                        <option>Oui</option> 
                                                        <option>Non</option>
                                                    </select>
                                                </label>


                                                <label for="text12">
                                                    Point de retour
                                                    <input type="text"  name="point-de-retour-travail">
                                                </label>


                                                <label for="text11">
                                                    Demande hebergement Retour
                                                    <select  name="demande-hebergement-retour-travail">
                                                        
                                                        <option>Oui</option> 
                                                        <option>Non</option>
                                                    </select>
                                                </label>




                                                <label for="text13">
                                                    nombre de nuite du trajet - Retour
                                                    <input type="number" id="text13" name="nombre-de-nuite-du-trajet-retour-travail" value="1">
                                                </label>
                                            </div>



                                            <div class="observation-travail">
                                                <label for="besoin-autorisation-transport-produits-dangereux-travail">
                                                    Besoin Autorisation Transport Produits Dangereux
                                                    <select  name="besoin-autorisation-transport-produits-dangereux-travail">
                                                        
                                                        <option>Oui</option> 
                                                        <option>Non</option>
                                                    </select>
                                                </label>

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
                                                </label>

                                                <label for="type-acheminement-du-materiel-travail">
                                                    Type Acheminement du materiel
                                                    <input type="text" name="type-acheminement-du-materiel-travail">
                                                </label>


                                                <label for="observation-travail">
                                                    Observation
                                                    <input type="text" name="observation-travail">
                                                </label>

                                            </div>

                                            <div class="boutons-kr">
                                                <button type="submit" class="btn-travail" name="valider-travail">Valider</button>

                                                <button type="submit" class="btn-travail" name="annuler-travail" >Annuler</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
