<div class="content" id="table-suivi">


<div class="navbar-Table-Button">
        <button onclick="showTable('suiviTravail')">Mission du terrain</button>
        <button onclick="showTable('suiviEtranger')">Mission à l'étranger</button>
        <button onclick="showTable('suiviCourse')">Course</button>
        <!-- <button onclick="showTable('suiviAcheminement')">Acheminement</button> -->
</div>


<!-- ***********************************
*****************suivi travail**********
**************************************** -->


<div id="suiviTravail" class="tables-container">
        <div class="table-header">
            <p>Suivi des demandes des missions du terrain</p>
        </div>
        <div class="header_fixed">
        <table>
                <thead>
                    <tr>
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
                        <th>Etat</th>
                    </tr>
                </thead>
                <tbody>
                     
                    <?php
                    
                    $sql="Select * from `travail` ORDER BY id";
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
                            $Etat = $row['Etat'];

                            echo '<tr>
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
                            <td>'.$Etat.'</td>
                        </tr>';
                        }
                    }
                
                ?>
                        
                </tbody>
            </table>
            </table>
        <!-- <div class="btn-class">
        <button id="btn-retour">Retour</button>
        <button id="btn-confirmer">confirmer</button>
        </div> -->
        </div>


</div>
        <!-- *************************************
*****************suivi etranger**********
**************************************** -->

<div id="suiviEtranger" class="tables-container">
    <div class="table-header">
            <p>Suivi des demandes des missions à l'étranger</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>N°&nbsp;demande</th>
                        <th>Date&nbsp;demande</th>
                        <th>Pays</th>
                        <th>Nom&nbsp;demandeur</th>
                        <th>Objet</th>
                        <th>Lieu&nbsp;de&nbsp;la&nbsp;mission</th>
                        <th>Nombre&nbsp;des&nbsp;jours</th>
                        <th>Nom&nbsp;missionnaires</th>
                        <th>Stiuation&nbsp;visa</th>
                        <th>Etat</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql="Select * from `etranger` ORDER BY id";
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
                            $Etat = $row['Etat'];

                            
                            echo '<tr>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$Pays.'</td>
                            <td>'.$Demandeur.'</td>
                            <td>'.$ObjetMission.'</td>
                            <td>'.$LieuMission.'</td>
                            <td>'.$NombreDesJours.'</td>
                            <td>'.$NomMissionnaires.'</td>
                            <td>'.$SituationVisa.'</td>
                            <td>'.$Etat.'</td>
                        </tr>';
                        }
                    }
                
                ?>
                </tbody>
            </table>
        </div>

</div>

        <!-- *************************************
*****************suivi course**********
**************************************** -->
<div id="suiviCourse" class="tables-container">
<div class="table" id="table-maj">
        <div class="table-header">
            <p>Suivi des demandes de course</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
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
                        <th>Etat</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql="Select * from `courses` ORDER BY id";
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
                            $Etat = $row['Etat'];

                            echo '<tr>
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
                            <td>'.$Etat.'</td>
                            </tr>';
                        }
                    }
                
                ?>
                </tbody>
            </table>
        </div>
        <!-- <div class="btn-class">
        <button id="btn-retour">Retour</button>
        <button id="btn-confirmer">confirmer</button>
        </div> -->
    </div>

</div>

        <!-- *************************************
*****************suivi Acheminement**********
**************************************** -->
<!-- <div id="suiviAcheminement" class="tables-container">
    <div class="table" id="table-maj">
        <div class="table-header">
            <p>Suivi des demandes d'acheminement</p>
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
                        <th>Etat du demande</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#">
                                <button class="consulter">Consulter</button>
                            </a>
                           
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> -->
        <!-- <div class="btn-class">
        <button id="btn-retour">Retour</button>
        <button id="btn-confirmer">confirmer</button>
        </div> -->
    </div> 

</div>


</div>