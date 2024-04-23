<?php
session_start();
if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
    header("Location: login.html");
    exit();}
// if (!isset($_SESSION["user"])) {
//    header("Location: login.php");
// }
?>
<?php
include "database.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="stylemisejr.css">
        <link rel="stylesheet" href="suivistyle.css">
        <link rel="stylesheet" href="styleadd.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
       
        <title>Dashboard</title>
    </head>
    <body id="body-pd">
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
                        <a  class="nav__link  " id="maj" >
                            <img src="../images/file.png" alt="">
                            <!-- <ion-icon name="home-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name" >Mise a jour</span>
                        </a>
                        
                        <a  class="nav__link  " id="travail">
                            <img src="../images/travail.png" alt="">
                            <!-- <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Travail</span>
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
        
        

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   mise a jourrrrrrr  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

        <?php require_once "maj-rs.php" ?>

        <!-- ***************************                      ********************************
        ********************************   FINNNNNNNN         ********************************
        ********************************   mise a jourrrrrrr  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->




        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   TRAVAILLLLLLLLLLL  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->


        <?php require_once "add-travail.php" ?>



        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   FIN TRAVAILLLLLLLL ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->


        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   ETRAAAAAAAAAANGER  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

        <?php require_once "add-etranger-rs.php" ?>


        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   FIN ETRAAAAAAANGER ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   COURSEEEEEEEEEEEE  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

        <?php require_once "add-course.php" ?>

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   FIN COURSEEEEEEEEE ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->



        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************  SUIVI DES DEMANDES  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

        <?php require_once "suivi-rs.php" ?>
                                

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************FIN SUIVI DES DEMANDES********************************
        ********************************                      ********************************
        ********************************                      ********************************-->


        

<!--  -->

        <!-- ===== IONICONS ===== -->
        <script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="showMenu.js"></script>
        <script src="affiche-contenu-rs.js"></script>

    </body>
</html>