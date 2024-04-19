<div class="table content" id="table-maj">
    
    <div class="navbar-Table-Button">
        <button onclick="showTable('tableFormation')">Formation</button>
        <button onclick="showTable('tableFormationEtranger')">Formation à l'étranger</button>
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
                                <a href="edit_formation.php">
                                    <button><i class='bx bxs-edit'></i></button>
                                </a>
                                <a href="delete_formation.php">
                                    <button><i class='bx bxs-trash'></i></button>
                                </a>
                            </td>
                        </tr>
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
        
</div>
<script src="tableswitcher.js"></script>
