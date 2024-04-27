<div class="traiter-etranger" id="traitement-etranger-box">

    <div class="popup" id="popupetranger">
        <!-- <div class="traiter-etranger" id="traitement-etranger-box"> -->
            <?php

            $sql = "SELECT Demandeur FROM etranger WHERE NumDemande = 5";
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
                <p class="header-text">Traiter une demande à l'étranger</p>
                    <div class="container-relex">
                        <div class="mini-container">
                            <label for="direction-etranger-relex">
                                Direction
                                <input type="text" name="direction-etranger-relex" readonly>
                            </label><!-- <br><br> -->
                            
                            <label for="departement-etranger-relex">
                                Département
                                <input type="text" name="departement-etranger-relex" readonly>
                            </label><!-- <br><br> -->

                            <label for="demandeur-etranger-relex">
                                Demande effectuée par
                                <input type="text" name="demandeur-etranger-relex" value="<?php echo $_SESSION["username"]; ?>" readonly>
                            </label><!-- <br><br> -->


                            <label for="compte-analytique-etranger-relex">
                                Compte analytique
                                <input type="text" name="compte-analytique-etranger-relex" readonly>
                            </label><!-- <br><br> -->

                            <label for="num-demande-etranger-relex">
                                Num Demande 
                                <input type="number" name="num-demande-etranger-relex" value="1" min="1" required>
                            </label>

                            <label for="date-demande-etranger-relex">
                                Date de demande
                                <input type="date" name="date-demande-etranger-relex" value="<?php echo date('Y-m-d'); ?>" readonly>
                            </label><!-- <br><br> -->

                            <label for="destinataire-etranger-relex">
                                Destinataire
                                <input type="text" name="destinataire-etranger-relex" value="RELEX" readonly>
                            </label>

                            <label for="du-etranger-relex">
                                Date début           
                                <input type="date" name="du-etranger-relex" value="<?php echo date('Y-m-d'); ?>">
                            </label>

                            <label for="au-etranger-relex">
                                Date fin
                                <input type="date" name="au-etranger-relex" value="<?php echo date('Y-m-d'); ?>">
                            </label><!-- <br><br> -->

                            <label for="nb-jours-etranger-relex">
                                Nombre des jours
                                <input type="number" name="nb-jours-etranger-relex" value="0" min="0">
                            </label><!-- <br><br> -->
                        
                            <label for="objet-mission-etranger-relex">
                                Objet de la mission
                                <input type="text" name="objet-mission-etranger-relex">
                            </label><!-- <br><br> -->
                            
                            
                            <label for="lieu-mission-etranger-relex">
                                Lieu de mission
                                <input type="text" name="lieu-mission-etranger-relex">
                            </label>
                            
                            <label for="pays-etranger-relex">
                                Pays de formation  
                                <input type="text" name="pays-etranger-relex">
                            </label>
                            
                            <label for="cadre-mission-etranger-relex">
                                Cadre de la mission
                                <select name="cadre-mission-etranger-relex" >
                                    <option value="contrat">Contrat</option> 
                                    <option value="plan de formation">Plan de formation</option>
                                    <option value="autre">Autre</option>
                                </select><!-- <br><br> -->            
                            </label>
                            
                            <label for="info-complement-etranger-relex">
                                Information complémentaire <!-- contrat N° if contrat -->
                                <input type="text" name="info-complement-etranger-relex">
                            </label>
                            
                            <label for="missionnaires-etranger-relex">
                                Nom(s) et fonction du (des) missionnaire(s)
                                <input type="text" name="missionnaires-etranger-relex">
                            </label>
                            
                            <label for="situation-visa-etranger-relex">
                                Situation visa
                                <select name="situation-visa-etranger-relex" >
                                    <option value="Obtenue pour tous les missionnaires">Obtenue pour tous</option> 
                                    <option value="En cours pour tous les missoinnaires">En cours pour tous</option>
                                    <option value="En cours pour une partie des missoinnaires">En cours pour une partie</option>
                                    <option value="Autres">Autres</option>
                                </select><!-- <br><br> -->            
                            </label>
                            
                            <label for="info-visa-etranger-relex">
                                Information complémentaire visa
                                <input type="text" name="info-visa-etranger-relex">
                            </label>
                            
                            <label for="objectifs-mission-etranger-relex">
                                Objectifs de la mission
                                <input type="text" name="objectifs-mission-etranger-relex">
                            </label>
                            
                            <label for="opportunite-etranger-relex">
                                Opportunité Mission
                                <input type="text" name="opportunite-etranger-relex">
                            </label>

                            <input type="hidden"  name="etat-etranger-form" readonly value="NON TRAITE" hidden>


                        </div>

                        <div class="mini-container-relex">
                            <fieldset>
                                <legend>Hotellerie</legend>
                                    <!-- <p>Hotellerie</p> -->
                                    <label for="num-bc-etranger">
                                        N° BC 
                                        <input type="number" name="num-bc-etranger">
                                    </label>

                                    <label for="date-bc-hotel-etranger">
                                        Date BC 
                                        <input type="date" name="date-bc-hotel-etranger">
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
                                        <input type="number" name="objet-bc-etranger">
                                    </label>

                                    <label for="sejour-du-etranger">
                                        Séjour du 
                                        <input type="date" name="sejour-du-etranger">
                                    </label>


                                    <label for="sejour-au-etranger">
                                        Au
                                        <input type="date" name="sejour-au-etranger">
                                    </label>

                                    <label for="nb-nuit-etranger">
                                        Nombre de nuitée  
                                        <input type="number" name="nb-nuit-etranger">
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
                                        <input type="radio" name="chambre-etranger" value="double"> Double
                                        <input type="radio" name="chambre-etranger" value="single"> Single
                                    </label>


                                    <label for="restauration-etranger">
                                        Réstaurant
                                        <input type="checkbox" name="restauration-etranger" value="petit dejeuner"> Petit Déjeuner
                                        <input type="checkbox" name="restauration-etranger" value="dejeuner"> Déjeuner
                                        <input type="checkbox" name="restauration-etranger" value="diner"> Diner
                                        <input type="checkbox" name="restauration-etranger" value="boissons non alcoolisées"> boissons non alcoolisées incluses
                                    </label>

                            </fieldset>

                            <fieldset>
                                <legend>billetterie</legend>
                                <!-- <p>Billetterie</p> -->

                                    <label for="compagnie-etranger">
                                    <!-- <fieldset> -->
                                        <!-- <legend>Compagnies</legend> -->
                                        Compagnies
                                        <input type="radio" name="compagnie-etranger" value="air algerie"> Air Algérie
                                        <input type="radio" name="compagnie-etranger" value="tassili"> Tassili
                                    </label>
                                    <!-- </fieldset> -->
                                    <label for="ref-bc-etranger">
                                        Réf. BC 
                                        <input type="number" name="ref-bc-etranger">
                                    </label>

                                    <label for="date-bc-billet-etranger">
                                        Date BC 
                                        <input type="date" name="date-bc-billet-etranger">
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
                                        <input type="date" name="date-depart-billet-etranger">
                                    </label>

                                    <label for="date-retour-billet-etranger">
                                        Date retour  
                                        <input type="date" name="date-retour-billet-etranger">
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
                            <button type="button" id="btn-valider-popup-etranger">Valider</button>
                            <button type="button" id="btn-Annuler-popup-etranger">Annuler</button>
                        </div>
                    </div>
            </form>
        </div>

</div>
