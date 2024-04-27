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
                            <label for="direction-etranger">
                                Direction
                                <input type="text" name="direction-etranger" readonly>
                            </label><!-- <br><br> -->
                            
                            <label for="departement-etranger">
                                Département
                                <input type="text" name="departement-etranger" readonly>
                            </label><!-- <br><br> -->

                            <label for="demandeur-etranger">
                                Demande effectuée par
                                <input type="text" name="demandeur-etranger" value="<?php echo $_SESSION["username"]; ?>" readonly>
                            </label><!-- <br><br> -->


                            <label for="compte-analytique-etranger">
                                Compte analytique
                                <input type="text" name="compte-analytique-etranger" readonly>
                            </label><!-- <br><br> -->

                            <label>
                                Num Demande 
                                <input type="number" name="num-demande-etranger" value="1" min="1" required>
                            </label>

                            <label for="date-demande-etranger">
                                Date de demande
                                <input type="date" name="date-demande-etranger" value="<?php echo date('Y-m-d'); ?>" readonly>
                            </label><!-- <br><br> -->

                            <label for="destinataire-etranger">
                                Destinataire
                                <input type="text" name="destinataire-etranger" value="RELEX" readonly>
                            </label>

                            <label for="du-etranger">
                                Date début           
                                <input type="date" name="du-etranger" value="<?php echo date('Y-m-d'); ?>">
                            </label>

                            <label for="au-etranger">
                                Date fin
                                <input type="date" name="au-etranger" value="<?php echo date('Y-m-d'); ?>">
                            </label><!-- <br><br> -->

                            <label for="nb-jours-etranger">
                                Nombre des jours
                                <input type="number" name="nb-jours-etranger" value="0" min="0">
                            </label><!-- <br><br> -->
                        
                            <label for="objet-mission-etranger">
                                Objet de la mission
                                <input type="text" name="objet-mission-etranger">
                            </label><!-- <br><br> -->
                            
                            
                            <label for="lieu-mission-etranger">
                                Lieu de mission
                                <input type="text" name="lieu-mission-etranger">
                            </label>
                            
                            <label for="pays-etranger">
                                Pays de formation  
                                <input type="text" name="pays-etranger">
                            </label>
                            
                            <label for="cadre-mission-etranger">
                                Cadre de la mission
                                <select name="cadre-mission-etranger" >
                                    <option value="">Contrat</option> 
                                    <option value="">Plan de formation</option>
                                    <option value="">Autre</option>
                                </select><!-- <br><br> -->            
                            </label>
                            
                            <label for="info-complement-etranger">
                                Information complémentaire <!-- contrat N° if contrat -->
                                <input type="text" name="info-complement-etranger">
                            </label>
                            
                            <label for="missionnaires-etranger">
                                Nom(s) et fonction du (des) missionnaire(s)
                                <input type="text" name="missionnaires-etranger">
                            </label>
                            
                            <label for="situation-visa-etranger">
                                Situation visa
                                <select name="situation-visa-etranger" >
                                    <option value="Obtenue pour tous les missionnaires">Obtenue pour tous</option> 
                                    <option value="En cours pour tous les missoinnaires">En cours pour tous</option>
                                    <option value="En cours pour une partie des missoinnaires">En cours pour une partie</option>
                                    <option value="Autres">Autres</option>
                                </select><!-- <br><br> -->            
                            </label>
                            
                            <label for="info-visa-etranger">
                                Information complémentaire visa
                                <input type="text" name="info-visa-etranger">
                            </label>
                            
                            <label for="objectifs-mission-etranger">
                                Objectifs de la mission
                                <input type="text" name="objectifs-mission-etranger">
                            </label>
                            
                            <label for="opportunite-etranger">
                                Opportunité Mission
                                <input type="text" name="opportunite-etranger">
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
