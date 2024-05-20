
<div class="table content" id="table-maj">
    
    <div class="navbar-Table-Button">
        <button class="active-btn" onclick="showTable('tableFormation')" id="formation-btn-maj">Formation</button>
        <button class="active-btn" onclick="showTable('tableFormationEtranger')" id="formation-etranger-btn-maj">Formation à l'étranger</button>
    </div>

    <div id="tableFormation" class="tables-container">
        <div class="table-header">
                <p>Mise à jour des demandes de formation</p>
        </div>
            <div class="header_fixed">
            <table>
                <thead>
                    <tr>

                        <th>Action</th>
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
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM `formation` WHERE Etat='NON TRAITE' ORDER BY id";
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
                            
                            echo '<tr>
                            <td>
                            <form action="delete_update_formation.php?idF='.$row["id"].'" method="post">
                            <div class="btn-dlt-upt">
                                <button name="delete-formation"><i class="bx bxs-trash"></i></button>
                                </div>
                            </form>
                            </td>
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
                            
                            
                        </tr>';
                        }
                    }
                
                ?>
                </tbody>
            </table>
            </div>
    </div>
    
        


        <!-- ********************************************************
             ******************* Etrangerrr *************************
             ******************************************************** -->
    <div id="tableFormationEtranger" class="tables-container">
        <div class="table-header">
            <p>Mise à jour des demandes de formation à l'étranger</p>
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
                            <form action="delete_update_etranger_formation.php?idRSF='.$row["id"].'" method="post">
                            <div class="btn-dlt-upt">
                                <button name="delete-etranger-formation" ><i class="bx bxs-trash"></i></button>
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
        
</div>
<script src="tableswitcher.js"></script>
