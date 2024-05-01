<link rel="stylesheet" href="stylemisejr.css">
<link rel="stylesheet" href="relex-formation.css">
    <div id="tableCourse-relex" class="tables-container">


        <div class="table-header">
            <p>Traitement des demandes de course</p>
        </div>


        
        <!-- add form to get num demande cliquee -->
        
            <div class="header_fixed" id="table-demande-course-relex">
                <table id="table-course-relex">
                    <thead>
                        <tr>
                        <tr>
                            <th class="th-relex-course">N° demande</th>
                            <th class="th-relex-course">Date demande</th>
                            <th class="th-relex-course">Point depart</th>
                            <th class="th-relex-course">Date depart</th>
                            <th class="th-relex-course">Heure depart</th>
                            
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        $sql="Select * from `courses`";
                        $result=mysqli_query($conn,$sql);
                        if ($result) {
                            
                            while ($row=mysqli_fetch_assoc($result)) {
                                    if ($row['Etat']=='NON TRAITE') {
                                    $NumDemande = $row['NumDemande'];
                                    $DateDemande = $row['DateDemande'];
                                    $PointDepart = $row['PointDepart'];
                                    $DateDepart = $row['DateDepart'];
                                    $HeureDepart = $row['HeureDepart'];
                                    echo '<tr class="tr-relex-course">
                                    <td class="tr-relex-course">'.$NumDemande.'</td>
                                    <td class="tr-relex-course">'.$DateDemande.'</td>
                                    <td class="tr-relex-course">'.$PointDepart.'</td>
                                    <td class="tr-relex-course">'.$DateDepart.'</td>
                                    <td class="tr-relex-course">'.$HeureDepart.'</td>
                                    </tr>';
                                }
                            }
                        }
                    
                    ?>
                    </tbody>
                </table>
           
            </div>
        
        
            <a href="relex.php">
        <button id="retour-table-demande">Retour</button>
        </a>


    </div>

<!--*******************                    ************************ -->
<!--****************   div traitement course   ***************** -->
<!--*******************                    ************************ -->

<?php require_once 'traitement-course.php'; ?>

<!--*******************                    ************************ -->
<!--*************** FIN div traitement course  ***************** -->
<!--*******************                    ************************ -->
<script src="relex-course.js"></script>