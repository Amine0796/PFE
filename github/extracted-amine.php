 <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   mise a jourrrrrrr  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

        <div class="table content" id="table-maj">
        <div class="table-header">
            <p>Modification des demandes des missions non traités</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Objet mission</th>
                        <th>Période du</th>
                        <th>Période au</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                        $sql="Select * from `demande_mission`";
                        $result=mysqli_query($conn,$sql);
                        if ($result) {
                            
                            while ($row=mysqli_fetch_assoc($result)) {
                                $nDemande = $row['NumDemande'];
                                $dateDemande = $row['DateDemande'];
                                $objetMission = $row['ObjetMission'];
                                $dateDu = $row['DateDu'];
                                $dateAu = $row['DateAu'];
                                echo '<tr>
                                <td>'.$nDemande.'</td>
                                <td>'.$dateDemande.'</td>
                                <td>'.$objetMission.'</td>
                                <td>'.$dateDu.'</td>
                                <td>'.$dateAu.'</td>
                                <td>
                                    <button><i class="bx bxs-edit"></i></button> 
                                    <button><i class="bx bxs-trash"></i></button>
                                </td>
                            </tr>';
                            }
                        }
                    
                    ?>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button><i class='bx bxs-edit'></i></button> 
                            <button><i class='bx bxs-trash'></i></button>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <div class="btn-class">
        <button id="btn-retour">Retour</button>
        <button id="btn-confirmer">confirmer</button>
        </div>
    </div>



        <!-- ***************************                      ********************************
        ********************************   FINNNNNNNN         ********************************
        ********************************   mise a jourrrrrrr  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->




        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   FORMATIONNNNNNNNN  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->
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
    $RegionDeroulementMission=$_POST['region-deroulement-mission-formation']; 
    $LieuMission=$_POST['lieu-de-la-mission-formation'];
    $Itineraire=$_POST['itineraire-formation'] ;
    $ObjetMission=$_POST['objet-de-la-mission-formation'] ;
    $NomMissionnaires=$_POST['noms-des-missionaires-formation'] ;
    $MoyenTransportAller=$_POST['moyen-de-transport-aller-formation'] ;
    $MoyenTransportRetour=$_POST['moyen-de-transport-retour-formation'] ;
    $DemandeHebergement=$_POST['demande-hebergement-formation'] ;
    $DemandeVehiculeServiceAller=$_POST['demande-vehicule-service-aller-formation'] ;
    $DemandeVehiculeServiceRetour=$_POST['demande-vehicule-service-retour-formation'];
    $PointDepart=$_POST['point-de-depart-formation'] ;
    $DemandeHebergementAller=$_POST['demande-hebergement-aller-formation'] ;
    $NombreNuitesTrajetAller=$_POST['nombre-de-nuite-du-trajet-aller-formation'] ;
    $PointRetour=$_POST['point-de-retour-formation'] ;
    $DemandeHebergementRetour=$_POST['demande-hebergement-retour-formation'] ;
    $NombreNuitesTrajetRetour=$_POST['nombre-de-nuite-du-trajet-retour-formation'] ;
    $BesoinAutorisationTransportProduitsDangereux=$_POST['besoin-autorisation-transport-produits-dangereux-formation'] ;
    $TypeProduits=$_POST['type-produits-formation']; 
    $DemandeAcheminementMateriel=$_POST['demande-acheminement-du-materiel-formation'] ;
    $TypeAcheminementMateriel=$_POST['type-acheminement-du-materiel-formation'] ;
    $Observation=$_POST['observation-formation'] ;

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
                                <div class="content" id="table-formation">
                                    <form method="post">

                                        <div class="div1">
                                            <label for="text1">
                                                Direction
                                                <input type="text"  name="direction-formation"><br><br>
                                            </label>
                                            

                                            <label for="text2">
                                                Departement 
                                                <input type="text"  name="departement-formation"><br><br>
                                            </label>


                                            <label for="text3">
                                                Demande Effuctuee Par 
                                                <input type="text" name="demande-dffuctuee-par-formation" value="<?php echo $_SESSION["username"]; ?>"><br><br>
                                            </label>
                                            

                                            <label for="text4">
                                                Compte Analytique
                                                <input type="text" id="text4" name="compte-analytique-formation"><br><br>
                                            </label>
                                            

                                            <label>
                                                Num Demande 
                                                <input type="text" name="num-demande-formation" required><br><br>
                                            </label>



                                            <label for="date1">
                                                Date Demande 
                                                <input type="date"  name="date-demande-formation"><br><br>
                                            </label>
                                            
                                            
                                            <label for="text5">
                                                Destinataire 
                                                <input type="text"  name="destinataire-formation"><br><br>
                                            </label>
                                            
                                            
                                            <label for="date2">
                                                Du 
                                                <input type="date" name="du-formation"><br><br>
                                            </label>

                                            <label for="date3">
                                                Au
                                                <input type="date" name="au-formation"><br><br>
                                            </label>
                                            

                                            <label for="select1">
                                                Region deroulement mission
                                                <select id="select1" name="region-deroulement-mission-formation">
                                                    <option>NORD</option>
                                                    <option>SUD</option>
                                                    <option>EST</option>
                                                    <option>OUEST</option>
                                                </select><br><br>
                                            </label>
                                            
                                            <label for="text6">
                                                lieu de la mission 
                                                <input type="text" name="lieu-de-la-mission-formation"><br><br>
                                            </label>
                                            

                                            <label for="text7">
                                                Itineraire
                                                <input type="text" name="itineraire-formation"><br><br>
                                            </label>

                                            <label for="text8">
                                                objet de la mission
                                                <input type="text" name="objet-de-la-mission-formation"><br><br>
                                            </label>
                                            

                                            <label for="text9">
                                                Nom(s) du(des) missionaire(s)
                                                <input type="text" name="noms-des-missionaires-formation"><br><br>
                                            </label>
                                            


                                            <label >
                                                Moyen de Transport aller 
                                                <select  name="moyen-de-transport-aller-formation">
                                                    <option>Avion</option>
                                                    <option>Vehicule</option>
                                                </select><br><br>
                                            </label>
                                            


                                            <label >
                                                Moyen de transport retour 
                                                <select  name="moyen-de-transport-retour-formation">
                                                    <option>Avion</option>
                                                    <option>Vehicule</option>
                                                </select><br><br>
                                            </label>
                                            

                                            <label >
                                                Demande hebergement
                                                <select  name="demande-hebergement-formation">
                                                    
                                                    <option>Oui</option> 
                                                    <option>Non</option>
                                                </select><br><br>
                                            </label>
                                            

                                        </div>

                                        <div class="aller">
                                            <label for="text10">
                                                Demande Vehicule service aller 
                                                <select  name="demande-vehicule-service-aller-formation">
                                                    
                                                    <option>Oui</option> 
                                                    <option>Non</option>
                                                </select><br><br>
                                            </label>


                                            <label for="text12">
                                                Point de depart
                                                <input type="text" name="point-de-depart-formation"><br><br>
                                            </label>


                                            <label for="text11">
                                                Demande hebergement aller
                                                <select  name="demande-hebergement-aller-formation">
                                                    
                                                    <option>Oui</option> 
                                                    <option>Non</option>
                                                </select><br><br>
                                            </label>




                                            <label for="text13">
                                                nombre de nuite du trajet - Aller
                                                <input type="number" name="nombre-de-nuite-du-trajet-aller-formation"><br><br>
                                            </label>
                                        </div>



                                        <div class="retour">
                                            <label for="text10">
                                                Demande Vehicule service Retour 
                                                <select  name="demande-vehicule-service-retour-formation">
                                                    
                                                    <option>Oui</option> 
                                                    <option>Non</option>
                                                </select><br><br>
                                            </label>


                                            <label for="text12">
                                                Point de retour
                                                <input type="text"  name="point-de-retour-formation"><br><br>
                                            </label>


                                            <label for="text11">
                                                Demande hebergement Retour
                                                <select  name="demande-hebergement-retour-formation">
                                                    
                                                    <option>Oui</option> 
                                                    <option>Non</option>
                                                </select><br><br>
                                            </label>




                                            <label for="text13">
                                                nombre de nuite du trajet - Retour
                                                <input type="number" id="text13" name="nombre-de-nuite-du-trajet-retour-formation"><br><br>
                                            </label>
                                            </div>



                                            <div class="observation-formation">
                                            <label for="text11">
                                                Besoin Autorisation Transport Produits Dangereux
                                                <select  name="besoin-autorisation-transport-produits-dangereux-formation">
                                                    
                                                    <option>Oui</option> 
                                                    <option>Non</option>
                                                </select><br><br>
                                            </label>

                                            <label for="text12">
                                                Type Produits
                                                <input type="text" name="type-produits-formation"><br><br>
                                            </label>

                                            <label for="text11">
                                                Demande Acheminement du materiel
                                                <select  name="demande-acheminement-du-materiel-formation">
                                                    
                                                    <option>Oui</option> 
                                                    <option>Non</option>
                                                </select><br><br>
                                            </label>

                                            <label for="text12">
                                                Type Acheminement du materiel
                                                <input type="text" name="type-acheminement-du-materiel-formation"><br><br>
                                            </label>


                                            <label for="text12">
                                                observation
                                                <input type="text" name="observation-formation"><br><br>
                                            </label>

                                        </div>

                                        <div class="buttons-formation">
                                            <button type="submit" class="btn-formation" name="valider-formation">Valider</button>

                                            <button type="submit" class="btn-formation" name="annuler-formation" >Annuler</button>
                                        </div>

                                    </form>

                                </div>

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   FIN FORMATIONNNNNN ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->


        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   ETRAAAAAAAAAANGER  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

                                        <div class="content" id="table-etranger">
                                            <h1>helloooooo etrangerrrrrrrr</h1>
                                        </div>

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   FIN ETRAAAAAAANGER ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->



        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************  SUIVI DES DEMANDES  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

                                        <div class="content" id="table-suivi">
                                            <h1>helloooooo suiviiiiiiiiiiii</h1>
                                        </div>

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************FIN SUIVI DES DEMANDES********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

