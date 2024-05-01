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
                        <th class="th-relex-etranger">N° demande</th>
                        <th class="th-relex-etranger">Date demande</th>
                        <th class="th-relex-etranger">Pays</th>
                        <th class="th-relex-etranger">Nom demandeur</th>
                        <th class="th-relex-etranger">Objet</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql="Select * from `etranger`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            
                            
                            if ($row['Etat']=='NON TRAITE') {
                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $Pays = $row['Pays'];
                            $Demandeur = $row['Demandeur'];
                            $ObjetMission = $row['ObjetMission'];
                            
                            echo '<tr class="tr-relex-etranger">
                            <td class="tr-relex-etranger">'.$NumDemande.'</td>
                            <td class="tr-relex-etranger">'.$DateDemande.'</td>
                            <td class="tr-relex-etranger">'.$Pays.'</td>
                            <td class="tr-relex-etranger">'.$Demandeur.'</td>
                            <td class="tr-relex-etranger">'.$ObjetMission.'</td>
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