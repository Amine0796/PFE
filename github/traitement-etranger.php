<?php
if (isset($_POST["btn-valider-popup-etranger"])) {
    // Assume $conn is your database connection

    // Retrieve form data
    $numDemandeChoisi = $_POST['num-demande-choisi'];
    $numBCH = $_POST['num-bc-etranger'];
    $dateBCH = $_POST['date-bc-hotel-etranger'];
    $regionH = $_POST['region-hotel-etranger'];
    $nomH = $_POST['nom-hotel-etranger'];
    $objetBCH = $_POST['objet-bc-etranger'];
    $dureeSejour = $_POST['duree-sejour'];
    $nomMissionnaireH = $_POST['nom-missionnaire-hotel-etranger'];
    $compteAnalytiqueH = $_POST['compte-analytique-hotel-etranger'];
    $chambreH = $_POST['chambre-etranger'];
    $restaurationH = isset($_POST['restauration-etranger']) ? implode(', ', $_POST['restauration-etranger']) : '';
    $compagnieB = $_POST['compagnie-etranger'];
    $refBCB = $_POST['ref-bc-etranger'];
    $dateBCB = $_POST['date-bc-billet-etranger'];
    $regionB = $_POST['region-Billet-etranger'];
    $typeTrajetB = $_POST['type-trajet-etranger'];
    $trajetB = $_POST['trajet-etranger'];
    $classeB = $_POST['classe-billet-etranger'];
    $objetBCB = $_POST['objet-bc-billet-etranger'];
    $DateDepartB = $_POST['date-depart-billet-etranger'];
    $DateRetourB = $_POST['date-retour-billet-etranger'];
    $nomMissionnairesB = $_POST['nom-missionnaire-billet-etranger'];
    $compteAnalytiqueB = $_POST['compte-analytique-billet-etranger'];

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
        $update_sql = "UPDATE etranger SET Etat = 'TRAITE' WHERE NumDemande = '$numDemandeChoisi'";
        $update_result = mysqli_query($conn, $update_sql);
        if ($update_result) {
            echo "<script>alert('Demande de etranger traitée avec succès!');</script>";
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




<div class="traiter-etranger" id="traitement-etranger-box">

    <div class="popup" id="popupetranger">
        <!-- <div class="traiter-etranger" id="traitement-etranger-box"> -->
            <?php

            // $sql = "SELECT Demandeur FROM etranger WHERE NumDemande = 5";
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
                <p class="header-text">Traiter une demande à l'étranger</p>
                    <div class="container-relex">
                        
                                    <label for="num-demande-choisi">
                                        N° Demande choisi 
                                        <input type="number" name="num-demande-choisi" value="1" min="1" required>
                                    </label>
                        <div class="mini-container-relex">

                            <fieldset>
                                <legend><div style="background-color:#eeeeee;border-radius:5px;">Hotellerie</div></legend>
                                    <!-- <p>Hotellerie</p> -->
                                    <label for="num-bc-etranger">
                                        N° BC 
                                        <input type="number" name="num-bc-etranger" value="1" min="1" required>
                                    </label>

                                    <label for="date-bc-hotel-etranger">
                                        Date BC 
                                        <input type="date" name="date-bc-hotel-etranger" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="region-hotel-etranger">
                                        Région 
                                        <input type="text" name="region-hotel-etranger">
                                    </label>


                                    <label for="nom-hotel-etranger">
                                        Nom hotel 
                                        <input type="text" name="nom-hotel-etranger">
                                    </label>


                                    <label for="objet-bc-hotel-etranger">
                                        Objet BC 
                                        <input type="text" name="objet-bc-etranger">
                                    </label>

                                    <label for="duree-sejour">
                                    duree Séjour 
                                        <input type="number" name="duree-sejour" value="1" min="1" required>
                                    </label>

                                    <label for="nom-missionnaire-hotel-etranger">
                                        Nom missionnaire  
                                        <input type="text" name="nom-missionnaire-hotel-etranger">
                                    </label>

                                    <label for="compte-analytique-hotel-etranger">
                                        Compte analytique  
                                        <input type="text" name="compte-analytique-hotel-etranger">
                                    </label>


                                    <label for="chambre-etranger">
                                        Chambre
                                        <select name="chambre-etranger">
                                            <option value="">Single</option> 
                                            <option value="">Double</option>
                                        </select>
                                    </label>


                                    <div>

                                        Réstaurant
    
                                        <div class="div1">
    
                                            <input id="checkbox-restauration-etranger" type="checkbox" name="restauration-etranger[]" value="petit dejeuner">
                                            <input id="checkbox-restauration-etranger" type="checkbox" name="restauration-etranger[]" value="dejeuner">
                                            <input id="checkbox-restauration-etranger" type="checkbox" name="restauration-etranger[]" value="diner">
                                            <input id="checkbox-restauration-etranger" type="checkbox" name="restauration-etranger[]" value="boissons non alcoolisées">
                                        </div>
                                        <div class="div2">
    
                                            <span class="span-resto">Petit Déjeuner</span>
                                            <span class="span-resto">Déjeuner</span>
                                           <span class="span-resto">Diner</span>
                                            <span class="span-resto">boissons non alcoolisées</span>
                                        </div>
                                    </div>

                            </fieldset>

                            <fieldset>
                                <legend><div style="background-color:#eeeeee;border-radius:5px;">billetterie</div></legend>
                                <!-- <p>Billetterie</p> -->

                                    <label for="compagnie-etranger">
                                        Compagnies
                                        <select name="chambre-etranger">
                                            <option value="">Tassili</option> 
                                            <option value="">Air Algérie</option>
                                        </select>
                                    </label>
                                    <label for="ref-bc-etranger">
                                        Réf. BC 
                                        <input type="number" name="ref-bc-etranger" value="1" min="1" required>
                                    </label>

                                    <label for="date-bc-billet-etranger">
                                        Date BC 
                                        <input type="date" name="date-bc-billet-etranger" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="region-Billet-etranger">
                                        Région de Destination
                                        <input type="text" name="region-Billet-etranger">
                                    </label>


                                    <label for="type-trajet-etranger">
                                        Type trajet 
                                        <input type="text" name="type-trajet-etranger">
                                    </label>


                                    <label for="trajet-etranger">
                                        Trajet 
                                        <input type="text" name="trajet-etranger">
                                    </label>

                                    <label for="classe-billet-etranger">
                                        Classe 
                                        <select name="classe-billet-etranger" id="classe-billet-etranger">
                                            <option value="economy">ECONOMY</option>
                                            <option value="business class">BUSINESS CLASS</option>
                                            <option value="first class">FIRST CLASS</option>
                                        </select>
                                    </label>


                                    <label for="objet-bc-billet-etranger">
                                        Objet BC
                                        <input type="text" name="objet-bc-billet-etranger">
                                    </label>

                                    <label for="date-depart-billet-etranger">
                                        Date départ  
                                        <input type="date" name="date-depart-billet-etranger" value="<?php echo date('Y-m-d'); ?>">
                                    </label>

                                    <label for="date-retour-billet-etranger">
                                        Date retour  
                                        <input type="date" name="date-retour-billet-etranger" value="<?php echo date('Y-m-d'); ?>">
                                    </label>


                                    <label for="nom-missionnaire-billet-etranger">
                                        Nom missionnaire  
                                        <input type="text" name="nom-missionnaire-billet-etranger">
                                    </label>

                                    <label for="compte-analytique-billet-etranger">
                                        Compte analytique  
                                        <input type="text" name="compte-analytique-billet-etranger">
                                    </label>
                                    
                            </fieldset>
                        </div>
                    
                        <div class="boutons-relex">
                            <button type="submit" id="btn-valider-popup-etranger" name="btn-valider-popup-etranger">Valider</button>
                            <button type="button" id="btn-Annuler-popup-etranger" name="btn-annuler-popup-etranger">Annuler</button>
                        </div>
                    </div>
            </form>
        </div>

</div>
