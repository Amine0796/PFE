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
            <form method="post">
                <p class="header-text">Traiter une demande de mission du terrain</p>
                    <div class="container-relex">
                        <div class="mini-container">
                            <label >
                                Direction
                                <input type="text"  name="direction-travail" readonly>
                            </label>
                                                                    

                            <label >
                                Département 
                                <input type="text"  name="departement-travail" readonly>
                            </label>


                            <label >
                                Demande effuctuée par 
                                <input type="text" name="demande-dffuctuee-par-travail" value="<?php echo $_SESSION["username"]; ?>" readonly>
                            </label>
                                                                    

                            <label >
                                Compte Analytique
                                <input type="text" id="text4" name="compte-analytique-travail" readonly>
                            </label>
                                                                    

                            <label>
                                Num Demande 
                                <input type="number" name="num-demande-travail" value="1" min="1" required>
                            </label>



                            <label >
                                Date Demande 
                                <input type="date"  name="date-demande-travail" value="<?php echo date('Y-m-d'); ?>" readonly>
                            </label>

                        

                                    <!-- </div> -->
                        
                                                            
                                <!-- <div class="secondformdiv"> -->

                            <label >
                                Destinataire 
                                <input type="text"  name="destinataire-travail" readonly value="RELEX">
                            </label>
                            
                            <label>
                                Date début           
                                <input type="date" name="du-travail" value="<?php echo date('Y-m-d'); ?>">
                            </label>

                            <label>
                                Date fin          
                                <input type="date" name="au-travail" value="<?php echo date('Y-m-d'); ?>">
                            </label>
                                                                    

                            <label>
                                Region deroulement mission
                                <select id="select1" name="region-deroulement-mission-travail">
                                    <option value="nord">NORD</option>
                                    <option value="sud">SUD</option>
                                    <option value="est">EST</option>
                                    <option value="ouest">OUEST</option>
                                </select>
                            </label>
                                                                    
                            <label >
                                lieu de la mission 
                                <input type="text" name="lieu-de-la-mission-travail">
                            </label>
                                                                    

                            <label >
                                Itineraire
                                <input type="text" name="itineraire-travail">
                            </label>

                            <label >
                                objet de la mission
                                <input type="text" name="objet-de-la-mission-travail">
                            </label>
                                                                    

                            <label>
                                Nom(s) du(des) missionaire(s)
                                <input type="text" name="noms-des-missionaires-travail">
                            </label>


                            <label >
                                Moyen de Transport aller 
                                <select  name="moyen-de-transport-aller-travail">
                                    <option>Avion</option>
                                    <option>Vehicule</option>
                                </select>
                            </label>
                                
                            <label >
                                Moyen de transport retour 
                                <select  name="moyen-de-transport-retour-travail">
                                    <option>Avion</option>
                                    <option>Vehicule</option>
                                </select>
                            </label>
                                                                    

                            
                        <!-- </div> -->
                        
                    <!-- </div> -->
                                                
                    <fieldset>
                        <legend>Aller</legend>
                        <div class="aller">
                            <label for="text10">
                                Demande Vehicule service aller 
                                <select  name="demande-vehicule-service-aller-travail">
                                    <!-- <option></option>  -->
                                    <option>Oui</option> 
                                    <option>Non</option>
                                </select>
                            </label>


                            <label>
                                Point de depart
                                <input type="text" name="point-de-depart-travail">
                            </label>


                            <label>
                                Demande hebergement aller
                                <select  name="demande-hebergement-aller-travail">
                                    <option>Oui</option> 
                                    <option>Non</option>
                                </select>
                            </label>


                            <label >
                                nombre de nuite du trajet - Aller
                                <input type="number" name="nombre-de-nuite-du-trajet-aller-travail" value="0" min="0">
                            </label>
                        </div>

                    </fieldset>


                    <fieldset>
                        <legend>Retour</legend>

                        <div class="retour">
                            <label for="text10">
                                Demande Vehicule service Retour 
                                <select  name="demande-vehicule-service-retour-travail">
                                    <option>Oui</option> 
                                    <option>Non</option>
                                </select>
                            </label>

                            <label>
                                Point de retour
                                <input type="text"  name="point-de-retour-travail">
                            </label>

                            <label>
                                Demande hebergement Retour
                                <select  name="demande-hebergement-retour-travail">
                                                                                
                                    <option>Oui</option> 
                                    <option>Non</option>
                                </select>
                            </label>

                            <label >
                                nombre de nuite du trajet - Retour
                                <input type="number" id="text13" name="nombre-de-nuite-du-trajet-retour-travail" value="0" min="0" >
                            </label>
                        </div>
                    </fieldset>

                    <label >
                                Demande hebergement
                                <select  name="demande-hebergement-travail">
                                    <!-- <option> </option>  -->
                                    <option>Oui</option> 
                                    <option>Non</option>
                                </select>
                    </label>

                    <div class="observation-travail">
                    
                        <label for="observation-travail">
                            Observation
                            <input type="text" name="observation-travail">
                        </label>

                        <input type="hidden"  name="etat-travail" readonly value="NON TRAITE" hidden>


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
                            <button type="button" id="btn-valider-popup-travail">Valider</button>
                            <button type="button" id="btn-Annuler-popup-travail">Annuler</button>
                        </div>
                    </div>
            </form>
        </div>

</div>
