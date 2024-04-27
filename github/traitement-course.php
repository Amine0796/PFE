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
                                    <label for="num-bc-course">
                                        N° BC 
                                        <input type="number" name="num-bc-course">
                                    </label>

                                    <label for="date-bc-hotel-course">
                                        Date BC 
                                        <input type="date" name="date-bc-hotel-course">
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
                                        <input type="number" name="objet-bc-course">
                                    </label>

                                    <label for="sejour-du-course">
                                        Séjour du 
                                        <input type="date" name="sejour-du-course">
                                    </label>


                                    <label for="sejour-au-course">
                                        Au
                                        <input type="date" name="sejour-au-course">
                                    </label>

                                    <label for="nb-nuit-course">
                                        Nombre de nuitée  
                                        <input type="number" name="nb-nuit-course">
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
                                        <input type="checkbox" name="restauration-course" value="petit dejeuner"> Petit Déjeuner
                                        <input type="checkbox" name="restauration-course" value="dejeuner"> Déjeuner
                                        <input type="checkbox" name="restauration-course" value="diner"> Diner
                                        <input type="checkbox" name="restauration-course" value="boissons non alcoolisées"> boissons non alcoolisées incluses
                                    </label>

                            </fieldset>

                            <fieldset>
                                <legend>billetterie</legend>
                                <!-- <p>Billetterie</p> -->

                                    <label for="compagnie-course">
                                        Compagnies
                                        <input type="radio" name="compagnie-course" value="air algerie"> Air Algérie
                                        <input type="radio" name="compagnie-course" value="tassili"> Tassili
                                    </label>
                                    <label for="ref-bc-course">
                                        Réf. BC 
                                        <input type="number" name="ref-bc-course">
                                    </label>

                                    <label for="date-bc-billet-course">
                                        Date BC 
                                        <input type="date" name="date-bc-billet-course">
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
                                        <input type="date" name="date-depart-billet-course">
                                    </label>

                                    <label for="date-retour-billet-course">
                                        Date retour  
                                        <input type="date" name="date-retour-billet-course">
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
                            <button type="button" id="btn-valider-popup-course">Valider</button>
                            <button type="button" id="btn-Annuler-popup-course">Annuler</button>
                        </div>
                    </div>
            </form>
        </div>

</div>
