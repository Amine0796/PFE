<div class="content" id="table-course">
        <p class="header-text">Ajouter une demande de course</p>

        <div class="container-kr">
            <label for="direction-course">
                Direction
                <input type="text" id="direction-course">
            </label><!-- <br><br> -->
            
            <label for="departement-course">
                Département
                <input type="text" id="departement-course">
            </label><!-- <br><br> -->

            <label for="demandeur-course">
                Demande effectuée par
                <input type="text" id="demandeur-course" value="<?php echo $_SESSION["username"]; ?>">
            </label><!-- <br><br> -->

            <label for="compte-analytique-course">
                Compte analytique
                <input type="text" id="compte-analytique-course">
            </label><!-- <br><br> -->

            <label for="date-demande-course">
                Date de demande
                <input type="text" id="date-demande-course">
            </label><!-- <br><br> -->

            <label for="destinataire-course">
                Destinataire
                <input type="text" id="destinataire-course">
            </label>

            <label for="dest-course">
                Destination
                <input type="text" id="dest-course">
            </label>

            <label for="objet-demande-course">
                Objet de la demande
                <input type="text" id="objet-demande-course">
            </label><!-- <br><br> -->

            <label for="missionnaires-course">
                Nom(s) du(des) missionnaire(s)
                <input type="text" id="missionnaires-course">
            </label>

            <label for="date-depart-course">
                Date du départ
                <input type="text" id="date-depart-course">
            </label><!-- <br><br> -->

            <label for="heure-depart-course">
                Heure du départ
                <input type="text" id="heure-depart-course">
            </label><!-- <br><br> -->

            <label for="point-depart-course">
                Point du départ
                <input type="text" id="point-depart-course">
            </label>
        </div>
        
        <div class="boutons-kr">
            <button type="submit" class="btn-course" name="valider-course">Valider</button>
            <button type="submit" class="btn-course" name="annuler-course" >Annuler</button>
        </div>

</div>
