<?php
if (isset($_POST["btn-valider-popup-formation"])) {
    // Assume $conn is your database connection

    // Retrieve form data
    $numDemandeChoisi = $_POST['num-demande-choisi'];
    $numBCH = $_POST['num-bc-formation'];
    $dateBCH = $_POST['date-bc-hotel-formation'];
    $regionH = $_POST['region-hotel-formation'];
    $nomH = $_POST['nom-hotel-formation'];
    $objetBCH = $_POST['objet-bc-formation'];
    $dureeSejour = $_POST['duree-sejour'];
    $nomMissionnaireH = $_POST['nom-missionnaire-hotel-formation'];
    $compteAnalytiqueH = $_POST['compte-analytique-hotel-formation'];
    $chambreH = $_POST['chambre-formation'];
    $restaurationH = isset($_POST['restauration-formation']) ? implode(', ', $_POST['restauration-formation']) : '';
    $compagnieB = $_POST['compagnie-formation'];
    $refBCB = $_POST['ref-bc-formation'];
    $dateBCB = $_POST['date-bc-billet-formation'];
    $regionB = $_POST['region-Billet-formation'];
    $typeTrajetB = $_POST['type-trajet-formation'];
    $trajetB = $_POST['trajet-formation'];
    $classeB = $_POST['classe-billet-formation'];
    $objetBCB = $_POST['objet-bc-billet-formation'];
    $DateDepartB = $_POST['date-depart-billet-formation'];
    $DateRetourB = $_POST['date-retour-billet-formation'];
    $nomMissionnairesB = $_POST['nom-missionnaire-billet-formation'];
    $compteAnalytiqueB = $_POST['compte-analytique-billet-formation'];

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
        $update_sql = "UPDATE formation SET Etat = 'TRAITE' WHERE NumDemande = '$numDemandeChoisi'";
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







<div class="traiter-formation" id="traitement-formation-box">

    <div class="popup" id="popupformation">
        <!-- <div class="traiter-formation" id="traitement-formation-box"> -->


            <?php

            $sql = "SELECT Demandeur FROM formation WHERE NumDemande = 4";
            // Execute query
            $result = $conn->query($sql);
            
            // Check if any rows were returned
            if ($result->num_rows > 0) {
                // Fetch the result (assuming there's only one row)
                $row = $result->fetch_assoc();
                $demandeur = $row["Demandeur"];
                
            }else{
                echo "aucun resultat $numDemande1";
            }
            ?>
            <form method="post" id="myform">
                <p class="header-text">Traiter une demande de formation</p>
                    <div class="container-relex">
                        
                    <label for="num-bc-formation">
                                        N° Demande choisi 
                                        <input type="number" name="num-demande-choisi" value="1" min="1" required>
                                    </label>
                        <div class="mini-container-relex">

                            <fieldset>
                                <legend><div style="background-color:#eeeeee;border-radius:5px;">Hotellerie</div></legend>
                                    <!-- <p>Hotellerie</p> -->
                                    <label for="num-bc-formation">
                                        N° BC 
                                        <input type="number" name="num-bc-formation" value="1" min="1" required>
                                    </label>

                                    <label for="date-bc-hotel-formation">
                                        Date BC 
                                        <input type="date" name="date-bc-hotel-formation" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="region-hotel-formation">
                                        Région 
                                        <input type="text" name="region-hotel-formation">
                                    </label>


                                    <label for="nom-hotel-formation">
                                        Nom hotel 
                                        <input type="text" name="nom-hotel-formation">
                                    </label>


                                    <label for="objet-bc-hotel-formation">
                                        Objet BC 
                                        <input type="text" name="objet-bc-formation">
                                    </label>

                                    <label for="duree-sejour">
                                    duree Séjour 
                                        <input type="number" name="duree-sejour" value="1" min="1" required>
                                    </label>

                                    <label for="nom-missionnaire-hotel-formation">
                                        Nom missionnaire  
                                        <input type="text" name="nom-missionnaire-hotel-formation">
                                    </label>

                                    <label for="compte-analytique-hotel-formation">
                                        Compte analytique  
                                        <input type="text" name="compte-analytique-hotel-formation">
                                    </label>


                                    <label for="chambre-formation">
                                        Chambre
                                        <input type="radio" name="chambre-formation" value="double"> Double
                                        <input type="radio" name="chambre-formation" value="single"> Single
                                    </label>


                                    <label for="restauration-formation">
                                        Réstaurant
                                        <input type="checkbox" name="restauration-formation[]" value="petit dejeuner"> Petit Déjeuner
                                        <input type="checkbox" name="restauration-formation[]" value="dejeuner"> Déjeuner
                                        <input type="checkbox" name="restauration-formation[]" value="diner"> Diner
                                        <input type="checkbox" name="restauration-formation[]" value="boissons non alcoolisées"> boissons non alcoolisées incluses
                                    </label>

                            </fieldset>

                            <fieldset>
                                <legend><div style="background-color:#eeeeee;border-radius:5px;">billetterie</div></legend>
                                <!-- <p>Billetterie</p> -->

                                    <label for="compagnie-formation">
                                        Compagnies
                                        <input type="radio" name="compagnie-formation" value="air algerie"> Air Algérie
                                        <input type="radio" name="compagnie-formation" value="tassili"> Tassili
                                    </label>
                                    <label for="ref-bc-formation">
                                        Réf. BC 
                                        <input type="number" name="ref-bc-formation" value="1" min="1" required>
                                    </label>

                                    <label for="date-bc-billet-formation">
                                        Date BC 
                                        <input type="date" name="date-bc-billet-formation" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="region-Billet-formation">
                                        Région de Destination
                                        <input type="text" name="region-Billet-formation">
                                    </label>


                                    <label for="type-trajet-formation">
                                        Type trajet 
                                        <input type="text" name="type-trajet-formation">
                                    </label>


                                    <label for="trajet-formation">
                                        Trajet 
                                        <input type="text" name="trajet-formation">
                                    </label>

                                    <label for="classe-billet-formation">
                                        Classe 
                                        <select name="classe-billet-formation" id="classe-billet-formation">
                                            <option value="economy">ECONOMY</option>
                                            <option value="business class">BUSINESS CLASS</option>
                                            <option value="first class">FIRST CLASS</option>
                                        </select>
                                    </label>


                                    <label for="objet-bc-billet-formation">
                                        Objet BC
                                        <input type="text" name="objet-bc-billet-formation">
                                    </label>

                                    <label for="date-depart-billet-formation">
                                        Date départ  
                                        <input type="date" name="date-depart-billet-formation" value="<?php echo date('Y-m-d'); ?>">
                                    </label>

                                    <label for="date-retour-billet-formation">
                                        Date retour  
                                        <input type="date" name="date-retour-billet-formation" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="nom-missionnaire-billet-formation">
                                        Nom missionnaire  
                                        <input type="text" name="nom-missionnaire-billet-formation">
                                    </label>

                                    <label for="compte-analytique-billet-formation">
                                        Compte analytique  
                                        <input type="text" name="compte-analytique-billet-formation">
                                    </label>
                                    
                            </fieldset>
                        </div>
                    
                        <div class="boutons-relex">
                            <button type="submit" id="btn-valider-popup-formation" name="btn-valider-popup-formation">Valider</button>
                            <button type="button" id="btn-Annuler-popup-formation" name="btn-annuler-popup-formation">Annuler</button>
                        </div>
                    </div>
            </form>
        </div>

</div>
