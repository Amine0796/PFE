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

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylemisejr.css">
    <link rel="stylesheet" href="styleadd.css">

    <title>RELEX</title>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="relex.css">

</head>
<body id="body-pd">

 <!-- sidebar -->

 <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <!-- menu outline  -->
                    <div class="nav__brand" >
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <div class="sonatrach">
                            <a class="nav__logo">Sonatrach</a>
                    </div> 
                    <!-- **************** -->

                    <!-- home outline -->
                    <div class="nav__brand" id="home" style="cursor: pointer;">
                            <ion-icon name="home-outline" class="nav__toggle"></ion-icon>
                        <div class="">
                            <a  class="nav__logo">accueil</a>
                        </div> 
                    </div>

                    <!-- **************** -->

                <!-- *******NAV LISTTTTTT********* -->
                    </div>
                    
                    <div class="nav__list">

                        <a  class="nav__link  " id="travail">
                            <img src="../images/travail.png" alt="">
                            <!-- <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Travail</span>
                        </a>


                        <a  class="nav__link" id="maj" >
                            <img src="../images/file.png" alt="">
                            <!-- <ion-icon name="home-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name" >Mise a jour</span>
                        </a>
                        

                        <a  class="nav__link" id="formation">
                            <img src="../images/formation.png" alt="">
                            <!-- <ion-icon name="folder-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Formation</span>
                        </a>

                        <a  class="nav__link" id="etranger">
                            <img src="../images/etranger.png" alt="">
                            
                            <span class="nav__name" >Etranger</span>
                        </a>
                        
                        <a class="nav__link collapse" id="course">
                            <img src="../images/taxi.png" alt="">
                            <!-- <ion-icon name="people-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Courses</span>
                        </a>

                        <a  class="nav__link dashboard-item" id="suivi">
                            <img src="../images/schedule.png" alt="">
                            <!-- <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Suivi des demandes</span>
                        </a>
                        
                        <a href="logout.php" class="nav__link logout-btn">
                            <img src="../images/se-deconnecter.png" alt="">
                            <!-- <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Logout</span>
                        </a>

                    </div>
                </div>
                
                
            </nav>
            
        </div>
        
        <div class="sonatrach-img content" id="home-content">
            <img src="../images/sonatrach-img.jpg" alt="" class="bg-dlab" id="sonatrach-img">
        </div>
        

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
    <table id="table-mission-non-traite">
        <thead>
            <tr>
                <th>Table Name</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
        


        <!-- <tr class="tr-mission-non-traite" id="tr-travail">
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
        </tr> -->
    </table>
</div>



<!-- liste des demandes non traite -->


        <!-- ===== IONICONS ===== -->
        <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="showMenu.js"></script>
        <script src="affiche-contenu-rs.js"></script>
        <script src="relex.js"></script>


</body>
</html>

