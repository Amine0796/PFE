<link rel="stylesheet" href="stylemisejr.css">
<link rel="stylesheet" href="relex-formation.css">
    <div id="tableEtranger-relex" class="tables-container">


        <div class="table-header">
            <p>Traitement des demandes de etranger</p>
        </div>


        
        <!-- add form to get num demande cliquee -->
        
            <div class="header_fixed" id="table-demande-etranger-relex">
            <table id="table-etranger-relex">
                <thead>
                    <tr>
                        <th class="th-relex-etranger">N°&nbsp;demande</th>
                        <th class="th-relex-etranger">Date&nbsp;demande</th>
                        <th class="th-relex-etranger">Pays</th>
                        <th class="th-relex-etranger">Nom demandeur</th>
                        <th class="th-relex-etranger">Objet</th>
                        <th class="th-relex-etranger">Nombre&nbsp;des&nbsp;jours</th>
                        <th class="th-relex-etranger">Lieu&nbsp;de&nbsp;la&nbsp;mission</th>
                        <th class="th-relex-etranger">Nom&nbsp;missionnaires</th>
                        <th class="th-relex-etranger">Stiuation&nbsp;visa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql="Select * from `etranger` ORDER BY id";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            
                            
                            if ($row['Etat']=='NON TRAITE') {
                                $NumDemande = $row['NumDemande'];
                                $DateDemande = $row['DateDemande'];
                                $Pays = $row['Pays'];
                                $Demandeur = $row['Demandeur'];
                                $ObjetMission = $row['ObjetMission'];
                                $NombreDesJours = $row['NombreDesJours'];
                                $LieuMission = $row['LieuMission'];
                                $NomMissionnaires = $row['NomMissionnaires'];
                                $SituationVisa = $row['SituationVisa'];
                            
                            echo '<tr class="tr-relex-etranger">
                            <td class="tr-relex-etranger">'.$NumDemande.'</td>
                            <td class="tr-relex-etranger">'.$DateDemande.'</td>
                            <td class="tr-relex-etranger">'.$Pays.'</td>
                            <td class="tr-relex-etranger">'.$Demandeur.'</td>
                            <td class="tr-relex-etranger">'.$ObjetMission.'</td>
                            <td class="tr-relex-etranger">'.$NombreDesJours.'</td>
                            <td class="tr-relex-etranger">'.$LieuMission.'</td>
                            <td class="tr-relex-etranger">'.$NomMissionnaires.'</td>
                            <td class="tr-relex-etranger">'.$SituationVisa.'</td>

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
<!--****************   div traitement etranger   ***************** -->
<!--*******************                    ************************ -->

<?php require_once 'traitement-etranger.php'; ?>

<!--*******************                    ************************ -->
<!--*************** FIN div traitement etranger  ***************** -->
<!--*******************                    ************************ -->
<script src="relex-etranger.js"></script>