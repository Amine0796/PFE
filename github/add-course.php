<?php
require_once "database.php";
if(isset($_POST['valider-course'])){
    $Direction=$_POST['direction-course'];
    $Departement=$_POST['departement-course'];
    $Demandeur=$_POST['demandeur-course']; 
    $CompteAnalytique=$_POST['compte-analytique-course']; 
    $NumDemande=$_POST['num-demande-course'];
    $DateDemande=$_POST['date-demande-course'];
    $Destinataire=$_POST['destinataire-course']; 
    $Destination=$_POST['destination-course']; 
    $ObjetCourse=$_POST['objet-demande-course'] ;
    $NomMissionnaires=$_POST['missionnaires-course'] ;
    $DateDepart=$_POST['date-depart-course'];
    $HeureDepart=$_POST['heure-depart-course'] ;
    $PointDepart=$_POST['point-depart-course'] ;
   

    $sql = "INSERT INTO courses (Direction, Departement, Demandeur, CompteAnalytique, NumDemande, DateDemande, Destinataire, Destination, ObjetCourse, NomMissionnaires, DateDepart, HeureDepart, PointDepart) 
    VALUES ('$Direction', '$Departement', '$Demandeur', '$CompteAnalytique','$NumDemande', '$DateDemande', '$Destinataire', '$Destination', '$ObjetCourse', '$NomMissionnaires', '$DateDepart', '$HeureDepart', '$PointDepart')";
    
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Data inserted successfully!');</script>";
        echo "<script>window.location.replace('RS.php');</script>";
        exit();
    }else{
        echo "<script>alert('Something went wrong');</script>";
        echo "<script>window.location.replace('RS.php');</script>";
        exit();
    }

}
?>
<form method="post">
<div class="content" id="table-course">
        <p class="header-text">Ajouter une demande de course</p>

        <div class="container-kr">
            <label for="direction-course">
                Direction
                <input type="text" name="direction-course">
            </label><!-- <br><br> -->
            
            <label for="departement-course">
                Département
                <input type="text" name="departement-course">
            </label><!-- <br><br> -->

            <label for="demandeur-course">
                Demande effectuée par
                <input type="text" name="demandeur-course" value="<?php echo $_SESSION["username"]; ?>">
            </label><!-- <br><br> -->

            <label>
            Num Demande 
            <input type="number" name="num-demande-course" value="1" min="1" required>
            </label>

            <label for="compte-analytique-course">
                Compte analytique
                <input type="text" name="compte-analytique-course">
            </label><!-- <br><br> -->

            <label for="date-demande-course">
                Date de demande
                <input type="date" name="date-demande-course" value="<?php echo date('Y-m-d'); ?>">
            </label><!-- <br><br> -->

            <label for="destinataire-course">
                Destinataire
                <input type="text" name="destinataire-course">
            </label>

            <label for="destination-course">
                Destination
                <input type="text" name="destination-course">
            </label>

            <label for="objet-demande-course">
                Objet de la demande
                <input type="text" name="objet-demande-course">
            </label><!-- <br><br> -->

            <label for="missionnaires-course">
                Nom(s) du(des) missionnaire(s)
                <input type="text" name="missionnaires-course">
            </label>

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
        </div>
        
        <div class="boutons-kr">
            <button type="submit" class="btn-course" name="valider-course">Valider</button>
            <button type="submit" class="btn-course" name="annuler-course" >Annuler</button>
        </div>

</div>
</form>