<div class="table content" id="table-maj">

<div class="navbar-Table-Button">
        <button onclick="showTable('tableTerrain')">Mission du terrain</button>
        <button onclick="showTable('tableEtranger')">Mission à l'étranger</button>
        <button onclick="showTable('tableCourse')">Course</button>
        <button onclick="showTable('tableAcheminement')">Acheminement</button>

    </div>

    <!-- *********************************************************
******************************************************************
******************************************************************
*************************** travail ******************************
******************************************************************
****************************************************************** -->
<div id="tableTerrain" class="tables-container">
        <div class="table-header">
            <p>Mise à jour des demande de mission du terrain</p>
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
                    <?php
                    
                    $sql="Select * from `demande_mission`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            $nDemande = $row['NumDemande'];
                            $dateDemande = $row['DateDemande'];
                            $objetMission = $row['ObjetMission'];
                            $dateDu = $row['DateDu'];
                            $dateAu = $row['DateAu'];
                            echo '<tr>
                            <td>'.$nDemande.'</td>
                            <td>'.$dateDemande.'</td>
                            <td>'.$objetMission.'</td>
                            <td>'.$dateDu.'</td>
                            <td>'.$dateAu.'</td>
                            <td></td>
                            <td>
                                <button ><i class="bx bxs-edit"></i></button> 
                                <button id="delete_row_travail"><i class="bx bxs-trash"></i></button>
                            </td>
                        </tr>';
                        }
                    }
                
                ?>
                        
                </tbody>
            </table>
        </div>


</div>
<!-- *************************************************************
******************************************************************
******************************************************************
*************************** etranger *****************************
******************************************************************
****************************************************************** -->
<div id="tableEtranger" class="tables-container">
        <div class="table-header">
            <p>Mise à jour des demandes des mission à l'étranger</p>
        </div>
        <div class="header_fixed">
            <table>
                <thead>
                    <tr>
                        <th>Année</th>
                        <th>Date demande</th>
                        <th>N° demande</th>
                        <th>Nom demandeur</th>
                        <th>Objet</th>
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
                        <td>
                            <a href="edit_etranger.php">
                                <button><i class='bx bxs-edit'></i></button>
                            </a>
                            <a href="delete_etranger.php">
                                <button><i class='bx bxs-trash'></i></button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

</div>




<!-- *************************************************************
******************************************************************
******************************************************************
*************************** course *******************************
******************************************************************
****************************************************************** -->
<div id="tableCourse" class="tables-container">
    <div class="table-header">
            <p>Mise à jour des demandes de course</p>
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
                        <td>
                            <a href="edit_course.php">
                                <button><i class='bx bxs-edit'></i></button>
                            </a>
                            <a href="delete_course.php">
                                <button><i class='bx bxs-trash'></i></button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>






<!-- *************************************************************
******************************************************************
******************************************************************
***************************Acheminement***************************
******************************************************************
****************************************************************** -->
<div id="tableAcheminement" class="tables-container">
        <div class="table-header">
            <p>Mise à jour des demandes d'acheminement</p>
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
                        <td>
                            <a href="edit_acheminement.php">
                                <button><i class='bx bxs-edit'></i></button>
                            </a>
                            <a href="delete_acheminement.php">
                                <button><i class='bx bxs-trash'></i></button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


</div>


</div>
<script src="tableswitcher.js"></script>
