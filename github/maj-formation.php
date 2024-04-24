
<div class="table content" id="table-maj">
    
    <div class="navbar-Table-Button">
        <button onclick="showTable('tableFormation')" id="formation-btn-maj">Formation</button>
        <button onclick="showTable('tableFormationEtranger')" id="">Formation à l'étranger</button>
    </div>

    <div id="tableFormation" class="tables-container">
        <div class="table-header">
                <p>Mise à jour des demandes de formation</p>
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
                    $sql="Select * from `formation`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            
                            $idF = $row['id'];
                            $_SESSION['idF'] = $idF;
                            
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
                            <form action="delete_update_formation.php" method="post">
                            <div class="btn-dlt-upt">
                                <button ><i class="bx bxs-edit"></i></button> 
                                <button name="delete-formation" ><i class="bx bxs-trash"></i></button>
                                </div>
                            </form>
                            </td>
                        </tr>';
                        }
                    }
                
                ?>
                </tbody>
            </table>
            </div>
    </div>
    
        


        <!-- ********************************************************
             ******************* Etrangerrr *************************
             ******************************************************** -->
    <div id="tableFormationEtranger" class="tables-container">
        <div class="table-header">
            <p>Mise à jour des demandes de formation à l'étranger</p>
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
                            $idFE = $row['id'];
                            $_SESSION['idFE'] = $idFE;

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
                            <form action="delete_update_etranger_formation.php" method="post">
                            <div class="btn-dlt-upt">
                                <button ><i class="bx bxs-edit"></i></button> 
                                <button name="delete-etranger-formation" ><i class="bx bxs-trash"></i></button>
                                </div>
                            </form>
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
<script src="tableswitcher.js"></script>
