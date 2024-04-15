<div class="content" id="table-suivi">

<!-- ***********************************
*****************suivi travail**********
**************************************** -->

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
                        <th>Etat du demande</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <tr>
                    <?php
                    
                    $sql="Select * from `demande_mission`";
                    $result=mysqli_query($conn,$sql);
                    if ($result) {
                        
                        while ($row=mysqli_fetch_assoc($result)) {
                            $nDemande = $row['idDemandeMission'];
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
                            <a href="#">
                                <button class="consulter">Consulter</button>
                            </a>

                        </td>
                            ';
                        }
                    }
                
                ?>
                        
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- <div class="btn-class">
        <button id="btn-retour">Retour</button>
        <button id="btn-confirmer">confirmer</button>
        </div> -->
    </div>

        <!-- *************************************
*****************suivi etranger**********
**************************************** -->


        <div class="table-header">
            <p>Suivi des demandes des missions à l'étranger</p>
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
                                <button class="btnconsulter">Consulter</button>
                            </a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- *************************************
*****************suivi course**********
**************************************** -->

    <div class="table" id="table-maj">
        <div class="table-header">
            <p>Suivi des demandes de course</p>
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

        <!-- *************************************
*****************suivi Acheminement**********
**************************************** -->

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
