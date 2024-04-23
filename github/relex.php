<?php
session_start();
if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
    header("Location: login.html");
    exit();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELEX</title>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="relex.css">

</head>
<body>


<!-- notification -->

<div class="notification-relex" id="notification-relex">
    <?php
    require_once 'database.php';
    $totalDemandesNonTraitees=0;
// Requête SQL pour compter le nombre total de formulaires non traités dans toutes les tables
$sql1 = "SELECT SUM(nbDemandesNonTraitees) AS totalDemandesNonTraitees
        FROM (
            SELECT COUNT(*) AS nbDemandesNonTraitees
            FROM travail
            WHERE Etat = 'NON TRAITE'
            UNION ALL
            SELECT COUNT(*) AS nbDemandesNonTraitees
            FROM etranger
            WHERE Etat = 'NON TRAITE'
            UNION ALL
            SELECT COUNT(*) AS nbDemandesNonTraitees
            FROM courses
            WHERE Etat = 'NON TRAITE'
            UNION ALL
            SELECT COUNT(*) AS nbDemandesNonTraitees
            FROM formation
            WHERE Etat = 'NON TRAITE'
        ) AS total";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) 
    $row1 = $result1->fetch_assoc();
    $totalDemandesNonTraitees = $row1["totalDemandesNonTraitees"];
    // Supposons que $nbDemandesNonTraitees contienne le nombre de demandes non traitées récupérées depuis la base de données

    // Maintenant, nous affichons le message ou la notification
    if ($totalDemandesNonTraitees > 0) {
        echo "<p>Vous avez $totalDemandesNonTraitees demandes non traitées.</p>";
        echo '<div class="btn-not" id="div-btn-notification">
        <button class="btn-notification primary" id="btn-afficher-notification">Afficher</button>
        <button class="btn-notification secondary" id="btn-annuler-notification-1">Annuler</button>
        </div>';
    } else {
        echo "<p>Aucune demande non traitée.</p>";
        echo '<div class="btn-not" id="div-btn-notification">
        <button class="btn-notification secondary" id="btn-annuler-notification-2">Annuler</button>
        </div>';
    }
    ?>
    
        
</div>

<!-- tableau des mission -->
<div class="mission-non-traite" id="table-mission">
    <table id="table-mission-non-traite" border="1">
        <tr>
            <th>Table Name</th>
        </tr>
        <tr class="tr-mission-non-traite" id="tr-travail">
            <td class="td-mission-non-traite" id="td-travail"><a href="view_table.php?table=travail">Travail</a></td>
        </tr>
        <tr class="tr-mission-non-traite" id="tr-etranger">
            <td class="td-mission-non-traite" id="td-etranger"><a href="view_table.php?table=etranger">Etranger</a></td>
        </tr>
        <tr class="tr-mission-non-traite" id="tr-courses">
            <td class="td-mission-non-traite" id="td-courses"><a href="view_table.php?table=courses">Courses</a></td>
        </tr>
        <tr class="tr-mission-non-traite" id="tr-formation">
            <td class="td-mission-non-traite" id="td-formation"><a href="relex-formation.php?table=formation">Formation</a></td>
        </tr>
    </table>
</div>



<!-- liste des demandes non traite -->

<!-- logout btn -->

<a href="logout.php">
            <img src="../images/se-deconnecter.png" class="logout-btn">
                <!-- <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon> -->
                <span class="nav__name">Logout</span>
        </a>
</body>
<script src="relex.js"></script>
</html>