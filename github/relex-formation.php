<link rel="stylesheet" href="stylemisejr.css">
<link rel="stylesheet" href="relex-formation.css">
    <div id="tableFormation-relex" class="tables-container">


        <div class="table-header">
            <p>Traitement des demandes de formation</p>
        </div>



        <!-- add form to get num demande cliquee -->
                    
                    


            <div class="header_fixed" id="table-demande-formation-relex">
                <table id="table-formation-relex">
                    <thead>
                        <tr>
                            <th class="th-relex-formation">N°&nbsp;demande</th>
                            <th class="th-relex-formation">Date&nbsp;demande</th>
                            <th class="th-relex-formation">Objet&nbsp;formation</th>
                            <th class="th-relex-formation">Nom&nbsp;demandeur</th>
                            <th class="th-relex-formation">Departement</th>
                            <th class="th-relex-formation">Compte&nbsp;Analytique</th>
                            <th class="th-relex-formation">Region</th>
                            <th class="th-relex-formation">Lieu&nbsp;de&nbsp;la&nbsp;formation</th>
                            <th class="th-relex-formation">Nom&nbsp;missionnaire</th>
                            <th class="th-relex-formation">Transport&nbsp;Aller</th>
                            <th class="th-relex-formation">Transport&nbsp;Retour</th>
                            <th class="th-relex-formation">Demande&nbsp;Hebergement</th>
                            <th class="th-relex-formation">Demande&nbsp;Billetterie</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    
                    <?php
                            require_once 'database.php';
                            $sql="Select * from `formation` ORDER BY id";
                            $result=mysqli_query($conn,$sql);
                            if ($result) {
                                
                                while ($row=mysqli_fetch_assoc($result)) {
                                    
                                    $idF = $row['id'];
                                    $_SESSION['idF'] = $idF;
                                    if ($row['Etat']=='NON TRAITE') {
                                        
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
                                        
                                        echo '<tr class="tr-relex-formation">
                                        <td class="td-relex-formation">'.$NumDemande.'</td>
                                        <td class="td-relex-formation">'.$DateDemande.'</td>
                                        <td class="td-relex-formation">'.$ObjetFormation.'</td>
                                        <td class="td-relex-formation">'.$Demandeur.'</td>
                                        <td class="td-relex-formation">'.$Departement.'</td>
                                        <td class="td-relex-formation">'.$CompteAnalytique.'</td>
                                        <td class="td-relex-formation">'.$RegionDeroulementFormation.'</td>
                                        <td class="td-relex-formation">'.$LieuFormation.'</td>
                                        <td class="td-relex-formation">'.$NomMissionnaires.'</td>
                                        <td class="td-relex-formation">'.$MoyenTransportAller.'</td>
                                        <td class="td-relex-formation">'.$MoyenTransportRetour.'</td>
                                        <td class="td-relex-formation">'.$DemandeHebergement.'</td>
                                        <td class="td-relex-formation">'.$DemandeBilletterie.'</td>

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
<!--****************   div traitement formation   ***************** -->
<!--*******************                    ************************ -->
<script>
    let lignesFormation = document.querySelectorAll('.tr-relex-formation');

// Parcourir chaque ligne
lignesFormation.forEach(function(ligne) {
    // Ajouter un gestionnaire d'événements de clic à chaque ligne
    ligne.addEventListener('click', function() {
        // Récupérer la cellule contenant NumDemande dans cette ligne
        let celluleNumDemande = ligne.querySelector('.td-relex-formation');

        // Récupérer la valeur de NumDemande
        let numDemande = celluleNumDemande.textContent;

        // Afficher la valeur de NumDemande
        console.log(numDemande)
    });
});

</script>


<?php require_once 'traitement-formation.php'; ?>

<!--*******************                    ************************ -->
<!--*************** FIN div traitement formation  ***************** -->
<!--*******************                    ************************ -->
<script src="relex-formation.js"></script>