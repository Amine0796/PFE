<?php
if (isset($_POST["btn-valider-popup-travail"])) {
    // Assume $conn is your database connection

    // Retrieve form data
    $numDemandeChoisi = $_POST['num-demande-choisi'];
    $numBCH = $_POST['num-bc-travail'];
    $dateBCH = $_POST['date-bc-hotel-travail'];
    $regionH = $_POST['region-hotel-travail'];
    $nomH = $_POST['nom-hotel-travail'];
    $objetBCH = $_POST['objet-bc-travail'];
    $dureeSejour = $_POST['duree-sejour'];
    $nomMissionnaireH = $_POST['nom-missionnaire-hotel-travail'];
    $compteAnalytiqueH = $_POST['compte-analytique-hotel-travail'];
    $chambreH = $_POST['chambre-travail'];
    $restaurationH = isset($_POST['restauration-travail']) ? implode(', ', $_POST['restauration-travail']) : '';
    $compagnieB = $_POST['compagnie-travail'];
    $refBCB = $_POST['ref-bc-travail'];
    $dateBCB = $_POST['date-bc-billet-travail'];
    $regionB = $_POST['region-Billet-travail'];
    $typeTrajetB = $_POST['type-trajet-travail'];
    $trajetB = $_POST['trajet-travail'];
    $classeB = $_POST['classe-billet-travail'];
    $objetBCB = $_POST['objet-bc-billet-travail'];
    $DateDepartB = $_POST['date-depart-billet-travail'];
    $DateRetourB = $_POST['date-retour-billet-travail'];
    $nomMissionnairesB = $_POST['nom-missionnaire-billet-travail'];
    $compteAnalytiqueB = $_POST['compte-analytique-billet-travail'];

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
        $update_sql = "UPDATE travail SET Etat = 'TRAITE' WHERE NumDemande = '$numDemandeChoisi'";
        $update_result = mysqli_query($conn, $update_sql);
        if ($update_result) {
            echo "<script>alert('Données insérées avec succès!');</script>";
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


<div class="traiter-travail" id="traitement-travail-box">

    <div class="popup" id="popuptravail">
        <!-- <div class="traiter-travail" id="traitement-travail-box"> -->
            <?php

            $sql = "SELECT Demandeur FROM travail WHERE NumDemande = 5";
            // Execute query
            $result = $conn->query($sql);
            
            // Check if any rows were returned
            if ($result->num_rows > 0) {
                // Fetch the result (assuming there's only one row)
                $row = $result->fetch_assoc();
                $demandeur = $row["Demandeur"];
                $_SESSION["demandeur"]=$demandeur;
            }
            ?>
            <form method="post" id="myform">
                <p class="header-text">Traiter une demande de travail</p>
                    <div class="container-relex">
                        
                    <label for="num-bc-travail">
                                        N° Demande choisi 
                                        <input type="number" name="num-demande-choisi" value="1" min="1" required>
                                    </label>
                        <div class="mini-container-relex">

                            <fieldset>
                                <legend><div style="background-color:#eeeeee;border-radius:5px;">Hotellerie</div></legend>
                                    <!-- <p>Hotellerie</p> -->
                                    <label for="num-bc-travail">
                                        N° BC 
                                        <input type="number" name="num-bc-travail" value="1" min="1" required>
                                    </label>

                                    <label for="date-bc-hotel-travail">
                                        Date BC 
                                        <input type="date" name="date-bc-hotel-travail" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="region-hotel-travail">
                                        Région 
                                        <input type="text" name="region-hotel-travail">
                                    </label>


                                    <label for="nom-hotel-travail">
                                        Nom hotel 
                                        <input type="text" name="nom-hotel-travail">
                                    </label>


                                    <label for="objet-bc-hotel-travail">
                                        Objet BC 
                                        <input type="text" name="objet-bc-travail">
                                    </label>

                                    <label for="duree-sejour">
                                    duree Séjour 
                                        <input type="number" name="duree-sejour" value="1" min="1" required>
                                    </label>

                                    <label for="nom-missionnaire-hotel-travail">
                                        Nom missionnaire  
                                        <input type="text" name="nom-missionnaire-hotel-travail">
                                    </label>

                                    <label for="compte-analytique-hotel-travail">
                                        Compte analytique  
                                        <input type="text" name="compte-analytique-hotel-travail">
                                    </label>


                                    <label for="chambre-travail">
                                        Chambre
                                        <input type="radio" name="chambre-travail" value="double"> Double
                                        <input type="radio" name="chambre-travail" value="single"> Single
                                    </label>


                                    <label for="restauration-travail">
                                        Réstaurant
                                        <input type="checkbox" name="restauration-travail[]" value="petit dejeuner"> Petit Déjeuner
                                        <input type="checkbox" name="restauration-travail[]" value="dejeuner"> Déjeuner
                                        <input type="checkbox" name="restauration-travail[]" value="diner"> Diner
                                        <input type="checkbox" name="restauration-travail[]" value="boissons non alcoolisées"> boissons non alcoolisées incluses
                                    </label>

                            </fieldset>

                            <fieldset>
                                <legend><div style="background-color:#eeeeee;border-radius:5px;">billetterie</div></legend>
                                <!-- <p>Billetterie</p> -->

                                    <label for="compagnie-travail">
                                        Compagnies
                                        <input type="radio" name="compagnie-travail" value="air algerie"> Air Algérie
                                        <input type="radio" name="compagnie-travail" value="tassili"> Tassili
                                    </label>
                                    <label for="ref-bc-travail">
                                        Réf. BC 
                                        <input type="number" name="ref-bc-travail" value="1" min="1" required>
                                    </label>

                                    <label for="date-bc-billet-travail">
                                        Date BC 
                                        <input type="date" name="date-bc-billet-travail" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="region-Billet-travail">
                                        Région de Destination
                                        <input type="text" name="region-Billet-travail">
                                    </label>


                                    <label for="type-trajet-travail">
                                        Type trajet 
                                        <input type="text" name="type-trajet-travail">
                                    </label>


                                    <label for="trajet-travail">
                                        Trajet 
                                        <input type="text" name="trajet-travail">
                                    </label>

                                    <label for="classe-billet-travail">
                                        Classe 
                                        <select name="classe-billet-travail" id="classe-billet-travail">
                                            <option value="economy">ECONOMY</option>
                                            <option value="business class">BUSINESS CLASS</option>
                                            <option value="first class">FIRST CLASS</option>
                                        </select>
                                    </label>


                                    <label for="objet-bc-billet-travail">
                                        Objet BC
                                        <input type="text" name="objet-bc-billet-travail">
                                    </label>

                                    <label for="date-depart-billet-travail">
                                        Date départ  
                                        <input type="date" name="date-depart-billet-travail" value="<?php echo date('Y-m-d'); ?>">
                                    </label>

                                    <label for="date-retour-billet-travail">
                                        Date retour  
                                        <input type="date" name="date-retour-billet-travail" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="nom-missionnaire-billet-travail">
                                        Nom missionnaire  
                                        <input type="text" name="nom-missionnaire-billet-travail">
                                    </label>

                                    <label for="compte-analytique-billet-travail">
                                        Compte analytique  
                                        <input type="text" name="compte-analytique-billet-travail">
                                    </label>
                                    
                            </fieldset>
                        </div>
                    
                        <div class="boutons-relex">
                            <button type="submit" id="btn-valider-popup-travail" name="btn-valider-popup-travail">Valider</button>
                            <button type="button" id="btn-Annuler-popup-travail" name="btn-annuler-popup-travail">Annuler</button>
                        </div>
                    </div>
            </form>
        </div>

</div>
