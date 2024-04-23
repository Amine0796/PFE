<div class="content" id="table-suivi">


<div class="navbar-Table-Button">
        <button onclick="showTable('suiviTravail')">Mission du terrain</button>
        <button onclick="showTable('suiviEtranger')">Mission à l'étranger</button>
        <button onclick="showTable('suiviCourse')">Course</button>
        <button onclick="showTable('suiviAcheminement')">Acheminement</button>
</div>


<!-- ***********************************
*****************suivi travail**********
**************************************** -->


<div id="suiviTravail" class="tables-container">
    <div class="table" id="table-maj">
        <div class="table-header">
            <p>Suivi des demandes des missions du terrain</p>
        </div>
        <div class="header_fixed">
        <table>
                <thead>
                    <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Objet mission</th>
                        <th>Période du</th>
                        <th>Période au</th>
                        <th>Departement</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                     
                    <?php
                    
                    $sql="Select * from `travail`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $ObjetMission = $row['ObjetMission'];
                            $DateDu = $row['DateDu'];
                            $DateAu = $row['DateAu'];
                            $Departement = $row['Departement'];
                            echo '<tr>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$ObjetMission.'</td>
                            <td>'.$DateDu.'</td>
                            <td>'.$DateAu.'</td>
                            <td>'.$Departement.'</td>
                            <td>
                            <a href="#">
                            <button class="btnconsulter">Consulter</button>
                            </a>
                            </td>
                        </tr>';
                        }
                    }
                
                ?>
                        
                </tbody>
            </table>
            </table>
        </div>
        <!-- <div class="btn-class">
        <button id="btn-retour">Retour</button>
        <button id="btn-confirmer">confirmer</button>
        </div> -->
    </div>


</div>
        <!-- *************************************
*****************suivi etranger**********
**************************************** -->

<div id="suiviEtranger" class="tables-container">
    <div class="table-header">
            <p>Suivi des demandes des missions à l'étranger</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Pays</th>
                        <th>Nom demandeur</th>
                        <th>Objet</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql="Select * from `etranger`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $Pays = $row['Pays'];
                            $Demandeur = $row['Demandeur'];
                            $ObjetMission = $row['ObjetMission'];
                            
                            echo '<tr>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$Pays.'</td>
                            <td>'.$Demandeur.'</td>
                            <td>'.$ObjetMission.'</td>
                            
                            <td>
                            <a href="#">
                                <button class="btnconsulter">Consulter</button>
                            </a>

                        </td>
                        </tr>';
                        }
                    }
                
                ?>
                </tbody>
            </table>
        </div>

</div>

        <!-- *************************************
*****************suivi course**********
**************************************** -->
<div id="suiviCourse" class="tables-container">
<div class="table" id="table-maj">
        <div class="table-header">
            <p>Suivi des demandes de course</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                    <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Point depart</th>
                        <th>Date depart</th>
                        <th>Heure depart</th>
                        <th>Action</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql="Select * from `courses`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $PointDepart = $row['PointDepart'];
                            $DateDepart = $row['DateDepart'];
                            $HeureDepart = $row['HeureDepart'];
                            echo '<tr>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$PointDepart.'</td>
                            <td>'.$DateDepart.'</td>
                            <td>'.$HeureDepart.'</td>
                            <td>
                            <a href="#">
                                <button class="consulter">Consulter</button>
                            </a>
                           
                        </td>
                            </tr>';
                        }
                    }
                
                ?>
                </tbody>
            </table>
        </div>
        <!-- <div class="btn-class">
        <button id="btn-retour">Retour</button>
        <button id="btn-confirmer">confirmer</button>
        </div> -->
    </div>

</div>

        <!-- *************************************
*****************suivi Acheminement**********
**************************************** -->
<div id="suiviAcheminement" class="tables-container">
    <div class="table" id="table-maj">
        <div class="table-header">
            <p>Suivi des demandes d'acheminement</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Objet mission</th>
                        <th>Période du</th>
                        <th>Période au</th>
                        <th>Etat du demande</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#">
                                <button class="consulter">Consulter</button>
                            </a>
                           
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- <div class="btn-class">
        <button id="btn-retour">Retour</button>
        <button id="btn-confirmer">confirmer</button>
        </div> -->
    </div> 

</div>


</div>