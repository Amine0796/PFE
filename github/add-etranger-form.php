<div class="content" id="table-etranger">
<form method="post">
    <p class="header-text">Ajouter une demande à l'étranger</p>

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
                <input type="text" id="datenow">
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

            <label for="nbjours">
                Nombre des jours
                <input type="number" id="nbjours">
            </label><!-- <br><br> -->
        
            <label for="objetmission">
                Objet de la mission
                <input type="text" id="objetmission">
            </label><!-- <br><br> -->
            
            
            <label for="lieumission">
                Lieu de mission
                <input type="text" id="lieumission">
            </label>
            
            <label for="pays">
                Pays
                <input type="text" id="pays">
            </label>
            
            <label for="cadremission">
                Cadre de la mission
                <select id="cadremission" >
                    <option value=""></option>
                    <option value="">Contrat</option> 
                    <option value="">Plan de formation</option>
                    <option value="">Autre</option>
                </select><!-- <br><br> -->            
            </label>
            
            <label for="infocomplement">
                Information complémentaire <!-- contrat N° if contrat -->
                <input type="text" id="infocomplement">
            </label>
            
            <label for="missionnaires">
                Nom(s) et fonction du (des) missionnaire(s)
                <input type="text" id="missionnaires">
            </label>
            
            <label for="situationvisa">
                Situation visa
                <select id="situationvisa" >
                    <option value=""></option>
                    <option value="">Obtenue pour tous les missionnaires</option> 
                    <option value="">En cours pour tous les missoinnaires</option>
                    <option value="">En cours pour une partie des missoinnaires</option>
                    <option value="">Autres</option>
                </select><!-- <br><br> -->            
            </label>
            
            <label for="infovisa">
                Information complémentaire visa
                <input type="text" id="infovisa">
            </label>
            
            <label for="objectifsmission">
                Objectifs de la mission
                <input type="text" id="objectifsmission">
            </label>
            
            <label for="opportunit">
                Opportunité Mission
                <input type="text" id="opportunit">
            </label>
        </div>

        <div class="boutons-kr">
            <button type="submit">Valider</button>
            <button>Fermer</button>
        </div>
    </form>
</div>