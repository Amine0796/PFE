<link rel="stylesheet" href="stylemisejr.css">
<link rel="stylesheet" href="relex-formation.css">
    <div id="tableTravail-relex" class="tables-container">


        <div class="table-header">
            <p>Traitement des demandes de mission du terrain</p>
        </div>


        
        <!-- add form to get num demande cliquee -->
        
            <div class="header_fixed" id="table-demande-travail-relex">
            <table id="table-travail-relex">
                <thead>
                <tr>
                        <th class="th-relex-travail">N°&nbsp;demande</th>
                        <th class="th-relex-travail">Date&nbsp;demande</th>
                        <th class="th-relex-travail">Objet&nbsp;Mission</th>
                        <th class="th-relex-travail">Nom&nbsp;demandeur</th>
                        <th class="th-relex-travail">Departement</th>
                        <th class="th-relex-travail">Compte&nbsp;Analytique</th>
                        <th class="th-relex-travail">Region</th>
                        <th class="th-relex-travail">Lieu&nbsp;de&nbsp;la&nbsp;Mission</th>
                        <th class="th-relex-travail">Nom&nbsp;missionnaire</th>
                        <th class="th-relex-travail">Transport&nbsp;Aller</th>
                        <th class="th-relex-travail">Transport&nbsp;Retour</th>
                        <th class="th-relex-travail">Demande&nbsp;Hebergement</th>
                        <th class="th-relex-travail">Demande&nbsp;Vehicule Aller</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql="Select * from `travail` ORDER BY id";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        while ($row=mysqli_fetch_assoc($result)) {
                                if ($row['Etat']=='NON TRAITE') {
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
                                
                                        echo '<tr class="tr-relex-travail">
                                        <td class="tr-relex-travail">'.$NumDemande.'</td>
                                        <td class="tr-relex-travail">'.$DateDemande.'</td>
                                        <td class="tr-relex-travail">'.$ObjetMission.'</td>
                                        <td class="tr-relex-travail">'.$Demandeur.'</td>
                                        <td class="tr-relex-travail">'.$Departement.'</td>
                                        <td class="tr-relex-travail">'.$CompteAnalytique.'</td>
                                        <td class="tr-relex-travail">'.$RegionDeroulementMission.'</td>
                                        <td class="tr-relex-travail">'.$LieuMission.'</td>
                                        <td class="tr-relex-travail">'.$NomMissionnaires.'</td>
                                        <td class="tr-relex-travail">'.$MoyenTransportAller.'</td>
                                        <td class="tr-relex-travail">'.$MoyenTransportRetour.'</td>
                                        <td class="tr-relex-travail">'.$DemandeHebergement.'</td>
                                        <td class="tr-relex-travail">'.$DemandeVehiculeServiceAller.'</td>

                                    </tr>';
                                }
                        }
                    }
                
                ?>
                </tbody>
            </table>
           
            </div>
        
        
        <a href="relex.php">
            <button id="retour-table-demande">Retour</button>
        </a>


    </div>

<!--*******************                    ************************ -->
<!--****************   div traitement travail   ***************** -->
<!--*******************                    ************************ -->

<?php require_once 'traitement-travail.php'; ?>

<!--*******************                    ************************ -->
<!--*************** FIN div traitement travail  ***************** -->
<!--*******************                    ************************ -->
<script src="relex-travail.js"></script>