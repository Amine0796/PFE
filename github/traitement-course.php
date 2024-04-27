<div class="traiter-course" id="traitement-course-box">

    <div class="popup" id="popupcourse">
        <!-- <div class="traiter-course" id="traitement-course-box"> -->
            <?php

            $sql = "SELECT Demandeur FROM courses WHERE NumDemande = 5";
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
            <form method="post">
                <p class="header-text">Traiter une demande de formation</p>
                    <div class="container-relex">
                        <div class="mini-container">
                        <label for="direction-course">
                Direction
                <input type="text" name="direction-course" readonly>
            </label><!-- <br><br> -->
            
            <label for="departement-course">
                Département
                <input type="text" name="departement-course" readonly>
            </label><!-- <br><br> -->

            <label for="demandeur-course">
                Demande effectuée par
                <input type="text" name="demandeur-course" value="<?php echo $_SESSION["username"]; ?>" readonly>
            </label><!-- <br><br> -->

            <label>
                Num Demande 
                <input type="number" name="num-demande-course" value="1" min="1" required>
            </label>

            <label for="compte-analytique-course">
                Compte analytique
                <input type="text" name="compte-analytique-course" readonly>
            </label><!-- <br><br> -->

            <label for="date-demande-course">
                Date de demande
                <input type="date" name="date-demande-course" value="<?php echo date('Y-m-d'); ?>" readonly>
            </label><!-- <br><br> -->

            <label for="destinataire-course">
                Destinataire
                <input type="text" name="destinataire-course" value="RELEX" readonly>
            </label>

            <label for="destination-course">
                Destination
                <input type="text" name="destination-course">
            </label>

            <label for="objet-demande-course">
                Objet de la demande
                <input type="text" name="objet-demande-course">
            </label><!-- <br><br> -->


            <label for="date-depart-course">
                Date du départ
                <input type="date" name="date-depart-course" value="<?php echo date('Y-m-d'); ?>">
            </label><!-- <br><br> -->

            <label for="heure-depart-course">
                Heure du départ
                <input type="text" name="heure-depart-course">
            </label><!-- <br><br> -->

            <label for="point-depart-course">
                Point du départ
                <input type="text" name="point-depart-course">
            </label>
            
            <label for="missionnaires-course">
                Nom(s) du(des) missionnaire(s)
                <input type="text" name="missionnaires-course">
            </label>


            <input type="hidden"  name="etat-course" readonly value="NON TRAITE" hidden>

                        </div>

                        <div class="mini-container-relex">
                            <fieldset>
                                <legend>Hotellerie</legend>
                                    <!-- <p>Hotellerie</p> -->
                                    <label for="num-bc-formation">
                                        N° BC 
                                        <input type="number" name="num-bc-formation">
                                    </label>

                                    <label for="date-bc-hotel-formation">
                                        Date BC 
                                        <input type="date" name="date-bc-hotel-formation">
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
                                        <input type="number" name="objet-bc-formation">
                                    </label>

                                    <label for="sejour-du-formation">
                                        Séjour du 
                                        <input type="date" name="sejour-du-formation">
                                    </label>


                                    <label for="sejour-au-formation">
                                        Au
                                        <input type="date" name="sejour-au-formation">
                                    </label>

                                    <label for="nb-nuit-formation">
                                        Nombre de nuitée  
                                        <input type="number" name="nb-nuit-formation">
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
                                        <input type="checkbox" name="restauration-formation" value="petit dejeuner"> Petit Déjeuner
                                        <input type="checkbox" name="restauration-formation" value="dejeuner"> Déjeuner
                                        <input type="checkbox" name="restauration-formation" value="diner"> Diner
                                        <input type="checkbox" name="restauration-formation" value="boissons non alcoolisées"> boissons non alcoolisées incluses
                                    </label>

                            </fieldset>

                            <fieldset>
                                <legend>billetterie</legend>
                                <!-- <p>Billetterie</p> -->

                                    <label for="compagnie-formation">
                                        Compagnies
                                        <input type="radio" name="compagnie-formation" value="air algerie"> Air Algérie
                                        <input type="radio" name="compagnie-formation" value="tassili"> Tassili
                                    </label>
                                    <label for="ref-bc-formation">
                                        Réf. BC 
                                        <input type="number" name="ref-bc-formation">
                                    </label>

                                    <label for="date-bc-billet-formation">
                                        Date BC 
                                        <input type="date" name="date-bc-billet-formation">
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
                                            <option value="first classe">FIRST CLASSE</option>
                                        </select>
                                    </label>


                                    <label for="objet-bc-billet-formation">
                                        Objet BC
                                        <input type="text" name="objet-bc-billet-formation">
                                    </label>

                                    <label for="date-depart-billet-formation">
                                        Date départ  
                                        <input type="date" name="date-depart-billet-formation">
                                    </label>

                                    <label for="date-retour-billet-formation">
                                        Date retour  
                                        <input type="date" name="date-retour-billet-formation">
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
                            <button type="button" id="btn-valider-popup-course">Valider</button>
                            <button type="button" id="btn-Annuler-popup-course">Annuler</button>
                        </div>
                    </div>
            </form>
        </div>

</div>
