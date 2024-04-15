<?php
require_once "add-formation.php";
?>
<div class="content" id="table-formation">
    <form method="post">
    <p class="header-text">Ajouter une demande de formation</p>
        <div class="container-kr">
            <label for="direction-formation">
                Direction
                <input type="text" id="direction-formation">
            </label><!-- <br><br> -->
            
            <label for="departement-formation">
                Département
                <input type="text" id="departement-formation">
            </label><!-- <br><br> -->

            <label for="demande-dffuctuee-par-formation">
                Demande effectuée par
                <input type="text" id="demande-dffuctuee-par-formation" value="<?php echo $_SESSION["username"]; ?>">
            </label><!-- <br><br> -->

            <label for="compte-analytique-formation">
                Compte analytique
                <input type="text" id="compte-analytique-formation">
            </label><!-- <br><br> -->

            <label>
                Num Demande 
                <input type="text" name="num-demande-formation" required>
            </label>

            <label for="date-demande-formation">
                Date de demande
                <input type="date" id="datenow">
            </label><!-- <br><br> -->

            <label for="destinataire-formation">
                Destinataire
                <input type="text" id="destinataire-formation">
            </label>

            <label for="du-formation">
                Période de la mission du 
                <input type="date" id="du-formation">
            </label>

            
            <label for="au-formation">
                au
                <input type="date" id="au-formation">
            </label><!-- <br><br> -->

            <label for="region-deroulement-mission-formation">
                Région deroulement formation
                <select id="region-deroulement-mission-formation" >
                    <option value="option1">NORD</option>
                    <option value="option2">SUD</option>
                    <option value="option3">EST</option>
                    <option value="option3">OUEST</option>
                </select><!-- <br><br> -->
            </label>
            
    
            <label for="lieu-de-la-mission-formation">
                lieu de la formation 
                <input type="text" id="lieu-de-la-mission-formation" >
            </label>
            
    
            <label for="itineraire-formation">
                Itineraire
                <input type="text" id="itineraire-formation">
            </label>
    
            <label for="objet-de-la-mission-formation">
                Objet de la formation
                <input type="text" id="objet-de-la-mission-formation">
            </label>
            
            <label for="demande-hebergement-formation">
                Demande hébergement
                <select id="demande-hebergement-formation" >
                    <option value=""></option>
                    <option value="oui">Oui</option> 
                    <option value="non">Non</option>
                </select><!-- <br><br> -->
            </label>

            <label for="demande-billet-formation">
                Demande billetterie
                <select id="billet" >
                    <option value=""></option>
                    <option value="oui">Oui</option> 
                    <option value="non">Non</option>
                </select><!-- <br><br> -->
            </label>

            <label for="organisme-formateur">
                Organisme formateur
                <input type="text" id="Organisme-formateur">
            </label>

            <label for="noms-des-missionaires-formation">
                Nom(s) du(des) missionnaire(s)
                <input type="text" id="noms-des-missionaires-formation">
            </label>
            

            <label for="moyen-de-transport-aller-formation">
                Moyen de Transport aller 
                <select id="moyen-de-transport-aller-formation" >
                    <option value="avion">Avion</option>
                    <option value="vehicule">Vehicule</option>
                </select><!-- <br><br> -->
            </label>
            

            <label for="moyen-de-transport-retour-formation">
                Moyen de transport retour 
                <select id="moyen-de-transport-retour-formation">
                    <option value="avion">Avion</option>
                    <option value="vehicule">Vehicule</option>
                </select><!-- <br><br> -->
            </label>
        

            <fieldset>
               <legend>Avion</legend>
               <div class="avion">
                    <label for="demande-vehicule-vers-aeroport-formation">
                        Demande Vehicule service vers l'aéroport 
                        <select id="demande-vehicule-vers-aeroport-formation">
                            <!-- <option value=""></option> -->
                            <option value="oui">Oui</option> 
                            <option value="non">Non</option>
                        </select><!-- <br><br> -->
                    </label>
                
    
                    <label for="point-de-depart-avion-formation">
                        Point du départ
                        <input type="text" id="point-de-depart-formation">
                    </label>
               </div>
            </fieldset>
        
        
            <fieldset>
                <legend>Véhicule</legend>
                <div class="vehicule">
                    <label for="demande-vehicule-vers-formation">
                        Demande Vehicule vers lieu de formation 
                        <select id="demande-vehicule-vers-formation">
                            <!-- <option value=""></option> -->
                            <option value="oui">Oui</option> 
                            <option value="non">Non</option>
                        </select><!-- <br><br> -->
                    </label>
                
                    <label for="point-de-depart-vehicule-formation">
                        Point du départ
                        <input type="text" id="point-de-depart-vehicule-formation">
                    </label>
                </div>
            </fieldset>

            <label for="observation-formation">
                Observations
                <input type="text" id="observation-formation">
            </label>


            <div class="boutons-kr">
            <button type="submit" class="btn-formation" name="valider-formation">Valider</button>
            <button type="submit" class="btn-formation" name="annuler-formation" >Annuler</button>
</div>
        </div>
    </form>
</div>