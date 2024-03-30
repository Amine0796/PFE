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
                        <a href="#" class="nav__link active " id="maj" >
                            <img src="../images/file.png" alt="">
                            <!-- <ion-icon name="home-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name" >Mise a jour</span>
                        </a>
                        <a href="#" class="nav__link" id="Travail">
                            <img src="../images/travail.png" alt="">
                            <!-- <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Travail</span>
                        </a>

                        <a  class="nav__link" >
                            <img src="../images/formation.png" alt="">
                            <!-- <ion-icon name="folder-outline" class="nav__icon"></ion-icon> -->
                            <span class="nav__name">Formation</span>

                            <!-- <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="#" class="collapse__sublink">Data</a>
                                <a href="#" class="collapse__sublink">Group</a>
                                <a href="#" class="collapse__sublink">Members</a>
                            </ul> -->
                        </a>

                        <a href="#" class="nav__link">
                            <img src="../images/etranger.png" alt="">
                            <!-- <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon> -->
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
                        <a href="logout.php" class="btn btn-danger" class="logout-btn">Logout</a>

                    </div>
                </div>
                
                
            </nav>
        </div>


<!-- mise a jour opennnnnnnnnnnnnnnnnnn -->

        <div id="content-area">
            
            <form>

                <div class="div1">
                    <label for="text1">
                        Direction 
                        <input type="text" id="text1" name="text1"><br><br>
                    </label>
                    
            
                    <label for="text2">
                        Departement 
                        <input type="text" id="text2" name="text2"><br><br>
                    </label>
        
            
                    <label for="text3">
                        Demande Effuctuee Par 
                        <input type="text" id="text3" name="text3"><br><br>
                    </label>
                    
            
                    <label for="text4">
                        Compte Analytique
                        <input type="text" id="text4" name="text4"><br><br>
                    </label>
                    
        
                    <label for="date1">
                        Date Demande 
                        <input type="date" id="date1" name="date1"><br><br>
                    </label>
                    
                    
                    <label for="text5">
                        Destinataire 
                        <input type="text" id="text5" name="text5"><br><br>
                    </label>
                    
                    
                    <label for="date2">
                        Du 
                        <input type="date" id="date2" name="date2"><br><br>
                    </label>
        
                    <label for="date3">
                        Au
                        <input type="date" id="date3" name="date3"><br><br>
                    </label>
                    
        
                    <label for="select1">
                        Region deroulement mission
                        <select id="select1" name="select1">
                            <option value="option1">NORD</option>
                            <option value="option2">SUD</option>
                            <option value="option3">EST</option>
                            <option value="option3">OUEST</option>
                        </select><br><br>
                    </label>
                    
            
                    <label for="text6">
                        lieu de la mission 
                        <input type="text" id="text6" name="text6"><br><br>
                    </label>
                    
            
                    <label for="text7">
                        Itineraire
                        <input type="text" id="text7" name="text7"><br><br>
                    </label>
            
                    <label for="text8">
                        objet de la mission
                        <input type="text" id="text8" name="text8"><br><br>
                    </label>
                    
        
                    <label for="text9">
                        Nom(s) du(des) missionaire(s)
                        <input type="text" id="text9" name="text9"><br><br>
                    </label>
                    
        
        
                    <label for="">
                        Moyen de Transport aller 
                        <select id="" name="">
                            <option value="option1">Avion</option>
                            <option value="option2">Vehicule</option>
                        </select><br><br>
                    </label>
                    
            
        
                    <label for="">
                        Moyen de transport retour 
                        <select id="" name="">
                            <option value="option1">Avion</option>
                            <option value="option2">Vehicule</option>
                        </select><br><br>
                    </label>
                    
            
                    <label for="">
                        Demande hebergement
                        <select id="" name="">
                            <option value=""></option>
                            <option value="">Oui</option> 
                            <option value="">Non</option>
                        </select><br><br>
                    </label>
                    
        
                </div>
        
        
        
        
        
                <!-- Text Inputs -->
               
                
        
            <div class="aller">
                <label for="text10">
                    Demande Vehicule service aller 
                    <select id="" name="">
                        <option value=""></option>
                        <option value="">Oui</option> 
                        <option value="">Non</option>
                    </select><br><br>
                </label>
                
        
                <label for="text12">
                    Point de depart
                    <input type="text" id="text12" name="text12"><br><br>
                </label>
        
        
                <label for="text11">
                    Demande hebergement aller
                    <select id="" name="">
                        <option value=""></option>
                        <option value="">Oui</option> 
                        <option value="">Non</option>
                    </select><br><br>
                </label>
        
               
                
        
                <label for="text13">
                    nombre de nuite du trajet - Aller
                    <input type="number" id="text13" name="text13"><br><br>
                </label>
            </div>
        
        
        
            <div class="retour">
                <label for="text10">
                    Demande Vehicule service Retour 
                    <select id="" name="">
                        <option value=""></option>
                        <option value="">Oui</option> 
                        <option value="">Non</option>
                    </select><br><br>
                </label>
                
        
                <label for="text12">
                    Point de retour
                    <input type="text" id="text12" name="text12"><br><br>
                </label>
        
        
                <label for="text11">
                    Demande hebergement Retour
                    <select id="" name="">
                        <option value=""></option>
                        <option value="">Oui</option> 
                        <option value="">Non</option>
                    </select><br><br>
                </label>
        
               
                
        
                <label for="text13">
                    nombre de nuite du trajet - Retour
                    <input type="number" id="text13" name="text13"><br><br>
                </label>
            </div>
        
        
                
        
                <!-- Number Inputs -->
                <label for="text11">
                    Demande hebergement Retour
                    <select id="" name="">
                        <option value=""></option>
                        <option value="">Oui</option> 
                        <option value="">Non</option>
                    </select><br><br>
                </label>
        
                <label for="number2">Number Input 2:</label>
                <input type="number" id="number2" name="number2"><br><br>
        
                <!-- Date Inputs -->
                
        
                 
                <!-- hi -->
                <!-- Select Inputs -->
               
        
                <!-- Repeat for additional select inputs -->
                <!-- You can copy and paste the above select input block to create more -->
        
                <!-- Submit Button -->
                <!-- <button type="submit">Submit</button> -->
            </form>
        </div>
        
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="main.js"></script>
    </body>
</html>