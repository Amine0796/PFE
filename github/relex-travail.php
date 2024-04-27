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
                        <th class="th-relex-travail">N° demande</th>
                        <th class="th-relex-travail">Date demande</th>
                        <th class="th-relex-travail">Objet Mission</th>
                        <th class="th-relex-travail">Période du</th>
                        <th class="th-relex-travail">Période au</th>
                        <th class="th-relex-travail">Departement</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql="Select * from `travail`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $ObjetMission = $row['ObjetMission'];
                            $DateDu = $row['DateDu'];
                            $DateAu = $row['DateAu'];
                            $Departement = $row['Departement'];
                            
                            echo '<tr class="tr-relex-travail">
                            <td class="tr-relex-travail">'.$NumDemande.'</td>
                            <td class="tr-relex-travail">'.$DateDemande.'</td>
                            <td class="tr-relex-travail">'.$ObjetMission.'</td>
                            <td class="tr-relex-travail">'.$DateDu.'</td>
                            <td class="tr-relex-travail">'.$DateAu.'</td>
                            <td class="tr-relex-travail">'.$Departement.'</td>
                        </tr>';
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