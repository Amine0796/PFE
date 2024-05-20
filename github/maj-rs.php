<div class="table content" id="table-maj">

<div class="navbar-Table-Button">
        <button onclick="showTable('tableTerrain')">Mission du terrain</button>
        <button onclick="showTable('tableEtranger')">Mission à l'étranger</button>
        <button onclick="showTable('tableCourse')">Course</button>
        <!-- <button onclick="showTable('tableAcheminement')">Acheminement</button> -->

    </div>

    <!-- *********************************************************
******************************************************************
******************************************************************
*************************** travail ******************************
******************************************************************
****************************************************************** -->
<div id="tableTerrain" class="tables-container">
        <div class="table-header">
            <p>Mise à jour des demande de mission du terrain</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                    <th>Action</th>
                        <th>N°&nbsp;demande</th>
                        <th>Date&nbsp;demande</th>
                        <th>Objet&nbsp;Mission</th>
                        <th>Nom&nbsp;demandeur</th>
                        <th>Departement</th>
                        <th>Compte&nbsp;Analytique</th>
                        <th>Region</th>
                        <th>Lieu&nbsp;de&nbsp;la&nbsp;Mission</th>
                        <th>Nom&nbsp;missionnaire</th>
                        <th>Transport&nbsp;Aller</th>
                        <th>Transport&nbsp;Retour</th>
                        <th>Demande&nbsp;Hebergement</th>
                        <th>Demande&nbsp;Vehicule Aller</th>

                    </tr>
                </thead>
                <tbody>
                     
                    <?php
                    
                    $sql = "SELECT * FROM `travail` WHERE Etat='NON TRAITE' ORDER BY id";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                           

                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $ObjetMission = $row['ObjetMission'];
                            $Demandeur = $row['Demandeur'];
                            $Departement = $row['Departement'];
                            $CompteAnalytique = $row['CompteAnalytique'];
                            $RegionDeroulementMission = $row['RegionDeroulementMission'];
                            $LieuMission = $row['LieuMission'];
                            $NomMissionnaires = $row['NomMissionnaires'];
                            $MoyenTransportAller = $row['MoyenTransportAller'];
                            $MoyenTransportRetour = $row['MoyenTransportRetour'];
                            $DemandeHebergement = $row['DemandeHebergement'];
                            $DemandeVehiculeServiceAller = $row['DemandeVehiculeServiceAller'];
                            echo '<tr>
                            <td>
                            <form action="delete_update_travail_rs.php?idT='.$row["id"].'" method="post">
                            <div class="btn-dlt-upt-rs">
                                <button name="delete-travail-rs" ><i class="bx bxs-trash"></i></button>
                                </div>
                            </form>
                            </td>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$ObjetMission.'</td>
                            <td>'.$Demandeur.'</td>
                            <td>'.$Departement.'</td>
                            <td>'.$CompteAnalytique.'</td>
                            <td>'.$RegionDeroulementMission.'</td>
                            <td>'.$LieuMission.'</td>
                            <td>'.$NomMissionnaires.'</td>
                            <td>'.$MoyenTransportAller.'</td>
                            <td>'.$MoyenTransportRetour.'</td>
                            <td>'.$DemandeHebergement.'</td>
                            <td>'.$DemandeVehiculeServiceAller.'</td>
                        </tr>';
                        }
                    }
                
                ?>
                        
                </tbody>
            </table>
        </div>


</div>
<!-- *************************************************************
******************************************************************
******************************************************************
*************************** etranger *****************************
******************************************************************
****************************************************************** -->
<div id="tableEtranger" class="tables-container">
        <div class="table-header">
            <p>Mise à jour des demandes des mission à l'étranger</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>N°&nbsp;demande</th>
                        <th>Date&nbsp;demande</th>
                        <th>Pays</th>
                        <th>Nom&nbsp;demandeur</th>
                        <th>Objet</th>
                        <th>Lieu&nbsp;de&nbsp;la&nbsp;mission</th>
                        <th>Nombre&nbsp;des&nbsp;jours</th>
                        <th>Nom&nbsp;missionnaires</th>
                        <th>Stiuation&nbsp;visa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql = "SELECT * FROM `etranger` WHERE Etat='NON TRAITE' ORDER BY id";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            
                            

                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $Pays = $row['Pays'];
                            $Demandeur = $row['Demandeur'];
                            $ObjetMission = $row['ObjetMission'];
                            $NombreDesJours = $row['NombreDesJours'];
                            $LieuMission = $row['LieuMission'];
                            $NomMissionnaires = $row['NomMissionnaires'];
                            $SituationVisa = $row['SituationVisa'];
                            
                            echo '<tr>
                            <td>
                            <form action="delete_update_etranger_rs.php?idRSE='.$row["id"].'" method="post">
                            <div class="btn-dlt-upt-rs">
                                <button name="delete-etranger-rs" ><i class="bx bxs-trash"></i></button>
                                </div>
                            </form>
                            </td>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$Pays.'</td>
                            <td>'.$Demandeur.'</td>
                            <td>'.$ObjetMission.'</td>
                            <td>'.$LieuMission.'</td>
                            <td>'.$NombreDesJours.'</td>
                            <td>'.$NomMissionnaires.'</td>
                            <td>'.$SituationVisa.'</td>
                            
                        </tr>';
                        }
                    }
                
                ?>
                </tbody>
            </table>
        </div>

</div>




<!-- *************************************************************
******************************************************************
******************************************************************
*************************** course *******************************
******************************************************************
****************************************************************** -->
<div id="tableCourse" class="tables-container">
    <div class="table-header">
            <p>Mise à jour des demandes de course</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>N°&nbsp;demande</th>
                        <th>Departement</th>
                        <th>Nom&nbsp;demandeur</th>
                        <th>Compte&nbsp;Analytique</th>
                        <th>Objet</th>
                        <th>Nom&nbsp;missionnaire</th>
                        <th>Destination</th>
                        <th>Date&nbsp;demande</th>
                        <th>Point&nbsp;depart</th>
                        <th>Date&nbsp;depart</th>
                        <th>Heure&nbsp;depart</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    
                    $sql = "SELECT * FROM `courses` WHERE Etat='NON TRAITE' ORDER BY id";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            

                            $NumDemande = $row['NumDemande'];
                            $Departement = $row['Departement'];
                            $Demandeur = $row['Demandeur'];
                            $CompteAnalytique = $row['CompteAnalytique'];
                            $ObjetCourse = $row['ObjetCourse'];
                            $NomMissionnaires = $row['NomMissionnaires'];
                            $Destination = $row['Destination'];
                            $DateDemande = $row['DateDemande'];
                            $PointDepart = $row['PointDepart'];
                            $DateDepart = $row['DateDepart'];
                            $HeureDepart = $row['HeureDepart'];


                            echo '<tr>
                            <td>
                            <form action="delete_update_course_rs.php?idC='.$row["id"].'" method="post">
                            <div class="btn-dlt-upt-rs">
                                <button name="delete-course-rs" ><i class="bx bxs-trash"></i></button>
                                </div>
                            </form>
                            </td>
                            <td>'.$NumDemande.'</td>
                            <td>'.$Departement.'</td>
                            <td>'.$Demandeur.'</td>
                            <td>'.$CompteAnalytique.'</td>
                            <td>'.$ObjetCourse.'</td>
                            <td>'.$NomMissionnaires.'</td>
                            <td>'.$Destination.'</td>

                            <td>'.$DateDemande.'</td>
                            <td>'.$PointDepart.'</td>
                            <td>'.$DateDepart.'</td>
                            <td>'.$HeureDepart.'</td>
                            </tr>';
                        }
                    }
                
                ?>

                </tbody>
            </table>
        </div>
</div>


</div>
<script src="tableswitcher.js"></script>