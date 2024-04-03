<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="stylemaj1.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!--      bootstrap  -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

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
                        <a  class="nav__link active " id="maj" >
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
        

        <div class="sonatrach-img">
            <img src="../images/sonatrach-img.jpg" alt="" class="bg-dlab" id="sonatrach-img">
        </div>
        
        

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   mise a jourrrrrrr  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

        <div class="table content" id="table-maj">
        <div class="table-header">
            <p>Modification des demandes des missions non traités</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Objet mission</th>
                        <th>Période du</th>
                        <th>Période au</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button><i class='bx bxs-edit'></i></button> 
                            <button><i class='bx bxs-trash'></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="btn-class">
        <button id="btn-retour">Retour</button>
        <button id="btn-confirmer">confirmer</button>
        </div>
    </div>



        <!-- ***************************                      ********************************
        ********************************   FINNNNNNNN         ********************************
        ********************************   mise a jourrrrrrr  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->




        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   FORMATIONNNNNNNNN  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

                                        <div class="content" id="table-formation">
                                            <h1>helloooooo formationnnnn</h1>
                                        </div>

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   FIN FORMATIONNNNNN ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->


        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   ETRAAAAAAAAAANGER  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

                                        <div class="content" id="table-etranger">
                                            <h1>helloooooo etrangerrrrrrrr</h1>
                                        </div>

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************   FIN ETRAAAAAAANGER ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->



        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************  SUIVI DES DEMANDES  ********************************
        ********************************                      ********************************
        ********************************                      ********************************-->

                                        <div class="content" id="table-suivi">
                                            <h1>helloooooo suiviiiiiiiiiiii</h1>
                                        </div>

        <!-- ***************************                      ********************************
        ********************************                      ********************************
        ********************************FIN SUIVI DES DEMANDES********************************
        ********************************                      ********************************
        ********************************                      ********************************-->


        

<!--  -->

        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="showMenu.js"></script>
        <script src="affiche-contenu1.js"></script>
    </body>
</html>