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
        <link rel="stylesheet" href="style1.css">
        <!--      bootstrap  -->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

        <title>Dashboard</title>
    </head>
    <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand" >
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <div class="sonatrach">
                            <a href="#" class="nav__logo">Sonatrach</a>
                    </div> 
                
                    </div>
                    <div class="nav__list">
                        <a href="maj.php" class="nav__link active " id="maj" >
                            <img src="../images/file.png" alt="">
                            <!-- <ion-icon name="home-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name" >Mise a jour</span>
                        </a>
                        <a href="#" class="nav__link" id="Travail">
                            <img src="../images/travail.png" alt="">
                            <!-- <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Travail</span>
                        </a>

                        

                        <a href="#" class="nav__link">
                            <img src="../images/etranger.png" alt="">
                            
                            <span class="nav__name" >Etranger</span>
                        </a>
                        <div class="nav__link collapse">
                            <img src="../images/taxi.png" alt="">
                            <!-- <ion-icon name="people-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Courses</span>

                            <!-- <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon> -->

                            <!-- <ul class="collapse__menu">
                                <a href="#" class="collapse__sublink">Data</a>
                                <a href="#" class="collapse__sublink">Group</a>
                                <a href="#" class="collapse__sublink">Members</a>
                            </ul> -->
                        </div>
                        <a href="#" class="nav__link dashboard-item">
                            <img src="../images/maintenance.png" alt="">
                            <!-- <ion-icon name="settings-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Produits</span>
                        </a>
                        <a href="#" class="nav__link dashboard-item">
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
            <img src="../images/sonatrach-img.jpg" alt="" class="bg-dlab">
        </div>
        
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="showMenu.js"></script>
        <script src="travail1.js"></script>
      

    </body>
</html>