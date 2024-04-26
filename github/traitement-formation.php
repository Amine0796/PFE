<div class="traiter-formation" id="traitement-formation-box">

<div class="popup" id="popupformation">
    <!-- <div class="traiter-formation" id="traitement-formation-box"> -->

        <form method="post">
            <p class="header-text">Traiter une demande de formation</p>
                <div class="container-relex">
                    <div class="mini-container">
                        <label for="direction-formation-relex">
                            Direction
                            <input type="text" name="direction-formation-relex" readonly>
                        </label><!-- <br><br> -->
                        
                        <label for="departement-formation-relex">
                            Département
                            <input type="text" name="departement-formation-relex" readonly>
                        </label><!-- <br><br> -->

                        <label for="demande-dffuctuee-par-formation-relex">
                            Demande effectuée par
                            <input type="text" name="demande-dffuctuee-par-formation-relex" readonly>
                        </label><!-- <br><br> -->

                        <label for="compte-analytique-formation-relex">
                            Compte analytique
                            <input type="text" name="compte-analytique-formation-relex" readonly>
                        </label><!-- <br><br> -->

                        <label for="num-demande-formation-relex">
                            Num Demande 
                            <input type="number" name="num-demande-formation-relex" value="1" min="1" required>
                        </label>

                        <label for="date-demande-formation-relex">
                            Date de demande
                            <input type="date" name="date-demande-formation-relex" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </label><!-- <br><br> -->

                        <label for="destinataire-formation-relex">
                            Destinataire
                            <input type="text" name="destinataire-formation-relex" value="RELEX" readonly>
                        </label>

                        <label for="du-formation-relex">
                            Date début 
                            <input type="date" name="du-formation-relex" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </label>

                        
                        <label for="au-formation-relex">
                            Date fin
                            <input type="date" name="au-formation-relex" value="<?php echo date('Y-m-d'); ?>" readonly>
                        </label><!-- <br><br> -->

                        <label for="region-deroulement-formation-relex">
                            Région deroulement formation
                            <select name="region-deroulement-formation-relex"  >
                                <option value="nord">NORD</option>
                                <option value="sud">SUD</option>
                                <option value="est">EST</option>
                                <option value="ouest">OUEST</option>
                            </select><!-- <br><br> -->
                        </label>
                        
                
                        <label for="lieu-formation-relex">
                            lieu de la formation 
                            <input type="text" name="lieu-formation-relex" readonly >
                        </label>
                        
                
                        <label for="itineraire-formation-relex">
                            Itineraire
                            <input type="text" name="itineraire-formation-relex" readonly>
                        </label>
                
                        <label for="objet-formation-relex">
                            Objet de la formation
                            <input type="text" name="objet-formation-relex" readonly>
                        </label>
                        
                        <label for="demande-hebergement-formation-relex">
                            Demande hébergement
                            <select name="demande-hebergement-formation-relex"  readonly>
                                <option >Oui</option> 
                                <option >Non</option>
                            </select><!-- <br><br> -->
                        </label>

                        <label for="demande-billet-formation-relex">
                            Demande billetterie
                            <select name="demande-billet-formation-relex"  readonly>
                                <option >Oui</option> 
                                <option >Non</option>
                            </select><!-- <br><br> -->
                        </label>

                        <label for="noms-missionaires-formation-relex">
                            Nom(s) du(des) missionnaire(s)
                            <input type="text" name="noms-missionaires-formation-relex" readonly>
                        </label>
                        

                        <label for="moyen-de-transport-aller-formation-relex">
                            Moyen de Transport aller 
                            <select name="moyen-transport-aller-formation-relex" >
                                <option value="avion">Avion</option>
                                <option value="vehicule">Vehicule</option>
                            </select><!-- <br><br> -->
                        </label>
                        

                        <label for="moyen-de-transport-retour-formation-relex">
                            Moyen de transport retour 
                            <select name="moyen-transport-retour-formation-relex">
                                <option value="avion">Avion</option>
                                <option value="vehicule">Vehicule</option>
                            </select><!-- <br><br> -->
                        </label>
                    <!-- </div> -->
                          

                    <fieldset>
                    <legend>Avion</legend>
                    <div class="avion">
                            <label for="demande-vehicule-vers-aeroport-formation-relex">
                                Demande Vehicule service vers l'aéroport 
                                <select name="demande-vehicule-aeroport-formation-relex">
                                    <!-- <option ></option> -->
                                    <option value="oui">Oui</option> 
                                    <option value="non">Non</option>
                                </select><!-- <br><br> -->
                            </label>
                        
            
                            <label for="point-de-depart-avion-formation-relex">
                                Point du départ
                                <input type="text" name="point-depart-avion-formation-relex" readonly>
                            </label>
                    </div>
                    </fieldset>
                    
                    <fieldset>
                        <legend>Véhicule</legend>
                        <div class="vehicule">
                            <label for="demande-vehicule-vers-formation-relex">
                                Demande Vehicule vers lieu de formation 
                                <select name="demande-vehicule-formation-relex">
                                    <!-- <option ></option> -->
                                    <option >Oui</option> 
                                    <option >Non</option>
                                </select><!-- <br><br> -->
                            </label>
                        
                            <label for="point-de-depart-vehicule-formation-relex">
                                Point du départ
                                <input type="text" name="point-depart-vehicule-formation-relex" readonly>
                            </label>
                        </div>
                    </fieldset>

                    <label for="organisme-formateur-relex">
                        Organisme formateur
                        <input type="text" name="organisme-formateur-relex" readonly>
                    </label>


                    <label for="observation-formation-relex">
                        Observations
                        <input type="text" name="observation-formation-relex" readonly>
                    </label>

                    <input type="hidden"  name="etat-formation" readonly value="NON TRAITE" hidden>

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
                        <button type="button" id="btn-valider-popup-formation">Valider</button>
                        <button type="button" id="btn-Annuler-popup-formation">Annuler</button>
                    </div>
                </div>
        </form>
	</div>

</div>
