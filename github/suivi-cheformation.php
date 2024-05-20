<div class="content" id="table-suivi">

    <div class="navbar-Table-Button">
        <button onclick="showTable('suiviFormation')">Formation</button>
        <button onclick="showTable('suiviFormationEtranger')">Formation à l'étranger</button>
    </div>
<!-- *************************************
*****************suivi formation**********
**************************************** -->
<div id="suiviFormation" class="tables-container">
    <div class="table-header">
            <p>Suivi des demandes de formation</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>N°&nbsp;demande</th>
                        <th>Date&nbsp;demande</th>
                        <th>Objet&nbsp;formation</th>
                        <th>Nom&nbsp;demandeur</th>
                        <th>Departement</th>
                        <th>Compte&nbsp;Analytique</th>
                        <th>Region</th>
                        <th>Lieu&nbsp;de&nbsp;la&nbsp;formation</th>
                        <th>Nom&nbsp;missionnaire</th>
                        <th>Transport&nbsp;Aller</th>
                        <th>Transport&nbsp;Retour</th>
                        <th>Demande&nbsp;Hebergement</th>
                        <th>Demande&nbsp;Billetterie</th>
                        <th>Etat</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql = "SELECT * FROM `formation` ORDER BY id";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $ObjetFormation = $row['ObjetFormation'];
                            $Demandeur = $row['Demandeur'];
                            $Departement = $row['Departement'];
                            $CompteAnalytique = $row['CompteAnalytique'];
                            $RegionDeroulementFormation = $row['RegionDeroulementFormation'];
                            $LieuFormation = $row['LieuFormation'];
                            $NomMissionnaires = $row['NomMissionnaires'];
                            $MoyenTransportAller = $row['MoyenTransportAller'];
                            $MoyenTransportRetour = $row['MoyenTransportRetour'];
                            $DemandeHebergement = $row['DemandeHebergement'];
                            $DemandeBilletterie = $row['DemandeBilletterie'];
                            $Etat = $row['Etat'];
                            
                            echo '<tr>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$ObjetFormation.'</td>
                            <td>'.$Demandeur.'</td>
                            <td>'.$Departement.'</td>
                            <td>'.$CompteAnalytique.'</td>
                            <td>'.$RegionDeroulementFormation.'</td>
                            <td>'.$LieuFormation.'</td>
                            <td>'.$NomMissionnaires.'</td>
                            <td>'.$MoyenTransportAller.'</td>
                            <td>'.$MoyenTransportRetour.'</td>
                            <td>'.$DemandeHebergement.'</td>
                            <td>'.$DemandeBilletterie.'</td>
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
*****************suivi formation etranger**********
**************************************** -->

<div id="suiviFormationEtranger" class="tables-container">
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
                        <th>Nom demandeur</th>
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
                    
                    $sql="SELECT * FROM `etranger` ORDER BY id";
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

</div>