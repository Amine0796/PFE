<div class="content" id="table-etranger">
<form method="post">
    <p class="header-text">Ajouter une demande à l'étranger</p>

        <div class="container-kr">
            <label for="direction-etrangerF">
                Direction
                <input type="text" id="direction-etrangerF">
            </label><!-- <br><br> -->
            
            <label for="departement-etrangerF">
                Département
                <input type="text" id="departement-etrangerF">
            </label><!-- <br><br> -->

            <label for="demandeur-etrangerF">
                Demande effectuée par
                <input type="text" id="demandeur-etrangerF" value="<?php echo $_SESSION["username"]; ?>">
            </label><!-- <br><br> -->

            <label for="compte-analytique-etrangerF">
                Compte analytique
                <input type="text" id="compte-analytique-etrangerF">
            </label><!-- <br><br> -->

            <label for="date-demande-etrangerF">
                Date de demande
                <input type="text" id="date-demande-etrangerF">
            </label><!-- <br><br> -->

            <label for="destinataire-etrangerF">
                Destinataire
                <input type="text" id="destinataire-etrangerF">
            </label>

            <label for="du-etrangerF">
                Période de la mission du 
                <input type="date" id="du-etrangerF">
            </label>

            <label for="au-etrangerF">
                au
                <input type="date" id="au-etrangerF">
            </label><!-- <br><br> -->

            <label for="n-bjours-etrangerF">
                Nombre des jours
                <input type="number" id="nb-jours-etrangerF">
            </label><!-- <br><br> -->
        
            <label for="objet-mission-etrangerF">
                Objet de la mission
                <input type="text" id="objet-mission-etrangerF">
            </label><!-- <br><br> -->
            
            
            <label for="lieu-mission-etrangerF">
                Lieu de mission
                <input type="text" id="lieu-mission-etrangerF">
            </label>
            
            <label for="pays-etrangerF">
                Pays
                <input type="text" id="pays-etrangerF">
            </label>
            
            <label for="cadre-mission-etrangerF">
                Cadre de la mission
                <select id="cadre-mission-etrangerF" >
                    <option value=""></option>
                    <option value="contrat">Contrat</option> 
                    <option value="plan de formation">Plan de formation</option>
                    <option value="autre">Autre</option>
                </select><!-- <br><br> -->            
            </label>
            
            <label for="info-complement-etrangerF">
                Information complémentaire <!-- contrat N° if contrat -->
                <input type="text" id="info-complement-etrangerF">
            </label>
            
            <label for="missionnaires-etrangerF">
                Nom(s) et fonction du (des) missionnaire(s)
                <input type="text" id="missionnaires-etrangerF">
            </label>
            
            <label for="situation-visa-etrangerF">
                Situation visa
                <select id="situation-visa-etrangerF" >
                    <option value=""></option>
                    <option value="">Obtenue pour tous les missionnaires</option> 
                    <option value="">En cours pour tous les missoinnaires</option>
                    <option value="">En cours pour une partie des missoinnaires</option>
                    <option value="">Autres</option>
                </select><!-- <br><br> -->            
            </label>
            
            <label for="info-visa-etrangerF">
                Information complémentaire visa
                <input type="text" id="info-visa-etrangerF">
            </label>
            
            <label for="objectifs-mission-etrangerF">
                Objectifs de la mission
                <input type="text" id="objectifs-mission-etrangerF">
            </label>
            
            <label for="opportunite-etrangerF">
                Opportunité Mission
                <input type="text" id="opportunit-etrangerF">
            </label>
        </div>

        <div class="boutons-kr">
            <button type="submit" class="btn-etrangerF" name="valider-etrangerF">Valider</button>
            <button type="submit" class="btn-etrangerF" name="annuler-etrangerF" >Annuler</button>
        </div>
    </form>
</div>