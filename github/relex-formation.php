<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="relex-formation.css">
    <title>Demandes</title>
</head>
<body>
<div id="tableFormation" class="tables-container">
<div class="table-header">
        <p>Mise à jour des demandes de formation</p>
</div>
    <div class="header_fixed">
    <table>
        <thead>
            <tr>
                <th class="th-relex-formation">N° demande</th>
                <th class="th-relex-formation">Date demande</th>
                <th class="th-relex-formation">Objet formation</th>
                <th class="th-relex-formation">Nom demandeur</th>
                <th class="th-relex-formation">Departement</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require_once 'database.php';
            $sql="Select * from `formation`";
            $result=mysqli_query($conn,$sql);
            if ($result) {
                
                while ($row=mysqli_fetch_assoc($result)) {
                    
                    $idF = $row['id'];
                    $_SESSION['idF'] = $idF;
                    
                    $NumDemande = $row['NumDemande'];
                    $DateDemande = $row['DateDemande'];
                    $ObjetFormation = $row['ObjetFormation'];
                    $Demandeur = $row['Demandeur'];
                    $Departement = $row['Departement'];
                    
                    echo '<tr class="tr-relex-formation">
                    <td class="td-relex-formation">'.$NumDemande.'</td>
                    <td class="td-relex-formation">'.$DateDemande.'</td>
                    <td class="td-relex-formation">'.$ObjetFormation.'</td>
                    <td class="td-relex-formation">'.$Demandeur.'</td>
                    <td class="td-relex-formation">'.$Departement.'</td>
                </tr>';
                }
            }
        
        ?>
        </tbody>
    </table>
    <a href="relex.php">
    <button id="retour-table-demande">Retour</button>
    </a>
    </div>
</div>

<!--*******************                    ************************ -->
<!--****************   div traitement formation   ***************** -->
<!--*******************                    ************************ -->

                <?php require_once 'traitement-formation.php'; ?>

<!--*******************                    ************************ -->
<!--*************** FIN div traitement formation  ***************** -->
<!--*******************                    ************************ -->


</body>
<script src="relex-formation.js"></script>
</html>