<?php
if (isset($_POST["btn-valider-popup-course"])) {
    // Assume $conn is your database connection

    // Retrieve form data
    $numDemandeChoisi = $_POST['num-demande-choisi'];
    $numBCH = $_POST['num-bc-course'];
    $dateBCH = $_POST['date-bc-hotel-course'];
    $regionH = $_POST['region-hotel-course'];
    $nomH = $_POST['nom-hotel-course'];
    $objetBCH = $_POST['objet-bc-course'];
    $dureeSejour = $_POST['duree-sejour'];
    $nomMissionnaireH = $_POST['nom-missionnaire-hotel-course'];
    $compteAnalytiqueH = $_POST['compte-analytique-hotel-course'];
    $chambreH = $_POST['chambre-course'];
    $restaurationH = isset($_POST['restauration-course']) ? implode(', ', $_POST['restauration-course']) : '';
    $compagnieB = $_POST['compagnie-course'];
    $refBCB = $_POST['ref-bc-course'];
    $dateBCB = $_POST['date-bc-billet-course'];
    $regionB = $_POST['region-Billet-course'];
    $typeTrajetB = $_POST['type-trajet-course'];
    $trajetB = $_POST['trajet-course'];
    $classeB = $_POST['classe-billet-course'];
    $objetBCB = $_POST['objet-bc-billet-course'];
    $DateDepartB = $_POST['date-depart-billet-course'];
    $DateRetourB = $_POST['date-retour-billet-course'];
    $nomMissionnairesB = $_POST['nom-missionnaire-billet-course'];
    $compteAnalytiqueB = $_POST['compte-analytique-billet-course'];

    // Insert data into database
    $sql = "INSERT INTO bc_hotel (numBCH, dateBCH, objetBCH, chambreH, restaurationH, compteAnalytiqueH) VALUES ('$numBCH', '$dateBCH', '$objetBCH', '$chambreH', '$restaurationH', '$compteAnalytiqueH')";
    $result = mysqli_query($conn, $sql);

    $sql1 = "INSERT INTO hotel (nomH, regionH) VALUES ('$nomH', '$regionH')";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "INSERT INTO reservation_hotel (nomMissionnaireH, dureeSejour) VALUES ('$nomMissionnaireH', '$dureeSejour')";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "INSERT INTO bc_billet (compagnieB, refBCB, dateBCB, classeB, objetBCB, DateDepartB, DateRetourB, compteAnalytiqueB) VALUES ('$compagnieB', '$refBCB', '$dateBCB', '$classeB', '$objetBCB', '$DateDepartB', '$DateRetourB', '$compteAnalytiqueB')";
    $result3 = mysqli_query($conn, $sql3);

    $sql4 = "INSERT INTO reservation_billet (regionB, typeTrajetB, trajetB, nomMissionnairesB) VALUES ('$regionB', '$typeTrajetB', '$trajetB', '$nomMissionnairesB')";
    $result4 = mysqli_query($conn, $sql4);

    if ($result && $result1 && $result2 && $result3 && $result4) {
        $update_sql = "UPDATE courses SET Etat = 'TRAITE' WHERE NumDemande = '$numDemandeChoisi'";
        $update_result = mysqli_query($conn, $update_sql);
        if ($update_result) {
            echo "<script>alert('Demande de course traitée avec succès!');</script>";
            echo "<script>window.location.replace('relex.php');</script>";
            exit();
        } else {
            $error_message = "Erreur lors de la mise à jour de l'état!";
        }
    } else {
        $error_message = "Erreur lors de l'insertion des données!";
    }

    // Display error message if any
    if (isset($error_message)) {
        echo "<script>alert('$error_message');</script>";
        echo "<script>window.location.replace('relex.php');</script>";
        exit();
    }
}
?>

<div class="traiter-course" id="traitement-course-box">

    <div class="popup" id="popupcourse">
        <!-- <div class="traiter-course" id="traitement-course-box"> -->
            <?php

            // $sql = "SELECT Demandeur FROM courses WHERE NumDemande = 5";
            // // Execute query
            // $result = $conn->query($sql);
            
            // // Check if any rows were returned
            // if ($result->num_rows > 0) {
            //     // Fetch the result (assuming there's only one row)
            //     $row = $result->fetch_assoc();
            //     $demandeur = $row["Demandeur"];
            //     $_SESSION["demandeur"]=$demandeur;
            // }
            ?>
            <form method="post">
                <p class="header-text">Traiter une demande de course</p>
                    <div class="container-relex">
                                    <label for="num-demande-choisi">
                                        N° Demande choisi 
                                        <input type="number" name="num-demande-choisi" value="1" min="1" required>
                                    </label>
                        
                        
                        <div class="mini-container-relex">

                            <fieldset>
                                <legend><div style="background-color:#eeeeee;border-radius:5px;">Hotellerie</div></legend>
                                    <!-- <p>Hotellerie</p> -->
                                    <label for="num-bc-course">
                                        N° BC 
                                        <input type="number" name="num-bc-course" value="1" min="1" required>
                                    </label>

                                    <label for="date-bc-hotel-course">
                                        Date BC 
                                        <input type="date" name="date-bc-hotel-course" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="region-hotel-course">
                                        Région 
                                        <input type="text" name="region-hotel-course">
                                    </label>


                                    <label for="nom-hotel-course">
                                        Nom hotel 
                                        <input type="text" name="nom-hotel-course">
                                    </label>


                                    <label for="objet-bc-hotel-course">
                                        Objet BC 
                                        <input type="text" name="objet-bc-course">
                                    </label>

                                    <label for="duree-sejour">
                                    duree Séjour 
                                        <input type="number" name="duree-sejour" value="1" min="1" required>
                                    </label>

                                    <label for="nom-missionnaire-hotel-course">
                                        Nom missionnaire  
                                        <input type="text" name="nom-missionnaire-hotel-course">
                                    </label>

                                    <label for="compte-analytique-hotel-course">
                                        Compte analytique  
                                        <input type="text" name="compte-analytique-hotel-course">
                                    </label>


                                    <label for="chambre-course">
                                        Chambre
                                        <input type="radio" name="chambre-course" value="double"> Double
                                        <input type="radio" name="chambre-course" value="single"> Single
                                    </label>


                                    <label for="restauration-course">
                                        Réstaurant
                                        <input type="checkbox" name="restauration-course[]" value="petit dejeuner"> Petit Déjeuner
                                        <input type="checkbox" name="restauration-course[]" value="dejeuner"> Déjeuner
                                        <input type="checkbox" name="restauration-course[]" value="diner"> Diner
                                        <input type="checkbox" name="restauration-course[]" value="boissons non alcoolisées"> boissons non alcoolisées incluses
                                    </label>

                            </fieldset>

                            <fieldset>
                                <legend><div style="background-color:#eeeeee;border-radius:5px;">billetterie</div></legend>
                                <!-- <p>Billetterie</p> -->

                                    <label for="compagnie-course">
                                        Compagnies
                                        <input type="radio" name="compagnie-course" value="air algerie"> Air Algérie
                                        <input type="radio" name="compagnie-course" value="tassili"> Tassili
                                    </label>
                                    <label for="ref-bc-course">
                                        Réf. BC 
                                        <input type="number" name="ref-bc-course" value="1" min="1" required>
                                    </label>

                                    <label for="date-bc-billet-course">
                                        Date BC 
                                        <input type="date" name="date-bc-billet-course" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="region-Billet-course">
                                        Région de Destination
                                        <input type="text" name="region-Billet-course">
                                    </label>


                                    <label for="type-trajet-course">
                                        Type trajet 
                                        <input type="text" name="type-trajet-course">
                                    </label>


                                    <label for="trajet-course">
                                        Trajet 
                                        <input type="text" name="trajet-course">
                                    </label>

                                    <label for="classe-billet-course">
                                        Classe 
                                        <select name="classe-billet-course" id="classe-billet-course">
                                            <option value="economy">ECONOMY</option>
                                            <option value="business class">BUSINESS CLASS</option>
                                            <option value="first class">FIRST CLASS</option>
                                        </select>
                                    </label>


                                    <label for="objet-bc-billet-course">
                                        Objet BC
                                        <input type="text" name="objet-bc-billet-course">
                                    </label>

                                    <label for="date-depart-billet-course">
                                        Date départ  
                                        <input type="date" name="date-depart-billet-course" value="<?php echo date('Y-m-d'); ?>">
                                    </label>

                                    <label for="date-retour-billet-course">
                                        Date retour  
                                        <input type="date" name="date-retour-billet-course" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="nom-missionnaire-billet-course">
                                        Nom missionnaire  
                                        <input type="text" name="nom-missionnaire-billet-course">
                                    </label>

                                    <label for="compte-analytique-billet-course">
                                        Compte analytique  
                                        <input type="text" name="compte-analytique-billet-course">
                                    </label>
                                    
                            </fieldset>
                        </div>
                    
                        <div class="boutons-relex">
                            <button type="submit" id="btn-valider-popup-course" name="btn-valider-popup-course">Valider</button>
                            <button type="button" id="btn-Annuler-popup-course" name="btn-annuler-popup-course">Annuler</button>
                        </div>
                    </div>
            </form>
        </div>

</div>
