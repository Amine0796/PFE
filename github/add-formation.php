<?php
require_once "add-formation.php";
?>
<div class="content" id="table-formation">
    <form method="post">
    <p class="header-text">Ajouter une demande de formation</p>
        <div class="container-kr">
            <label for="direction">
                Direction
                <input type="text" id="direction">
            </label><!-- <br><br> -->
            
            <label for="departement">
                Département
                <input type="text" id="departement">
            </label><!-- <br><br> -->

            <label for="demandeur">
                Demande effectuée par
                <input type="text" id="demandeur">
            </label><!-- <br><br> -->

            <label for="canalytique">
                Compte analytique
                <input type="text" id="canalytique">
            </label><!-- <br><br> -->

            <label for="datenow">
                Date de demande
                <input type="date" id="datenow">
            </label><!-- <br><br> -->

            <label for="destinataire">
                Destinataire
                <input type="text" id="destinataire">
            </label>

            <label for="datedebut">
                Période de la mission du 
                <input type="date" id="datedebut">
            </label>

            
            <label for="datefin">
                au
                <input type="date" id="datefin">
            </label><!-- <br><br> -->

            <label for="regionderoulement">
                Région deroulement formation
                <select id="regionderoulement" >
                    <option value="option1">NORD</option>
                    <option value="option2">SUD</option>
                    <option value="option3">EST</option>
                    <option value="option3">OUEST</option>
                </select><!-- <br><br> -->
            </label>
            
    
            <label for="lieuformation">
                lieu de la formation 
                <input type="text" id="lieuformation" >
            </label>
            
    
            <label for="itineraire">
                Itineraire
                <input type="text" id="itineraire">
            </label>
    
            <label for="objetformation">
                Objet de la formation
                <input type="text" id="objetformation">
            </label>
            
            <label for="heberg">
                Demande hébergement
                <select id="heberg" >
                    <option value=""></option>
                    <option value="">Oui</option> 
                    <option value="">Non</option>
                </select><!-- <br><br> -->
            </label>

            <label for="billet">
                Demande billetterie
                <select id="billet" >
                    <option value=""></option>
                    <option value="">Oui</option> 
                    <option value="">Non</option>
                </select><!-- <br><br> -->
            </label>

            <label for="organismeformateur">
                Organisme formateur
                <input type="text" id="organismeformateur">
            </label>

            <label for="missionnaires">
                Nom(s) du(des) missionnaire(s)
                <input type="text" id="missionnaires">
            </label>
            

            <label for="moyaller">
                Moyen de Transport aller 
                <select id="moyaller" >
                    <option value="option1">Avion</option>
                    <option value="option2">Vehicule</option>
                </select><!-- <br><br> -->
            </label>
            

            <label for="moyretour">
                Moyen de transport retour 
                <select id="moyretour">
                    <option value="option1">Avion</option>
                    <option value="option2">Vehicule</option>
                </select><!-- <br><br> -->
            </label>
        

            <fieldset>
               <legend>Avion</legend>
               <div class="avion">
                    <label for="demandeavion">
                        Demande Vehicule service vers l'aéroport 
                        <select id="demandeavion">
                            <!-- <option value=""></option> -->
                            <option value="">Oui</option> 
                            <option value="">Non</option>
                        </select><!-- <br><br> -->
                    </label>
                
    
                    <label for="ptdepartavion">
                        Point du départ
                        <input type="text" id="ptdepartavion">
                    </label>
               </div>
            </fieldset>
        
        
            <fieldset>
                <legend>Véhicule</legend>
                <div class="vehicule">
                    <label for="demandevehicule">
                        Demande Vehicule vers lieu de formation 
                        <select id="demandevehicule">
                            <!-- <option value=""></option> -->
                            <option value="oui">Oui</option> 
                            <option value="non">Non</option>
                        </select><!-- <br><br> -->
                    </label>
                
                    <label for="ptdepartvehicule">
                        Point du départ
                        <input type="text" id="ptdepartvehicule">
                    </label>
                </div>
            </fieldset>

            <label for="observ">
                Observations
                <input type="text" id="observ">
            </label>


            <div class="boutons-kr">
                <button type="submit">Valider</button>
                <button>Fermer</button>
            </div>
        </div>
    </form>
</div>