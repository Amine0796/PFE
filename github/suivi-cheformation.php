<div class="content" id="table-suivi">

    <div class="navbar-Table-Button">
        <button onclick="showTable('suiviFormation')">Formation</button>
        <button onclick="showTable('suiviFormationEtranger')">Formation à l'étranger</button>
    </div>
<!-- *************************************
*****************suivi formation**********
**************************************** -->
<div id="suiviFormation" class="tables-container">
    <div class="table-header">
            <p>Suivi des demandes de formation</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>N° demande</th>
                        <th>Date demande</th>
                        <th>Objet formation</th>
                        <th>Nom demandeur</th>
                        <th>Departement</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $sql = "SELECT * FROM `formation` WHERE Etat = 'TRAITE'";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            $NumDemande = $row['NumDemande'];
                            $DateDemande = $row['DateDemande'];
                            $ObjetFormation = $row['ObjetFormation'];
                            $Demandeur = $row['Demandeur'];
                            $Departement = $row['Departement'];
                            
                            echo '<tr>
                            <td>'.$NumDemande.'</td>
                            <td>'.$DateDemande.'</td>
                            <td>'.$ObjetFormation.'</td>
                            <td>'.$Demandeur.'</td>
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
        </div>


</div>
        <!-- *************************************
*****************suivi formation etranger**********
**************************************** -->

<div id="suiviFormationEtranger" class="tables-container">
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

</div>