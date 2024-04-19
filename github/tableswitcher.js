function showTable(tableId) {
    // Hide all tables
    var tables = document.getElementsByClassName('tables-container');
    for (var i = 0; i < tables.length; i++) {
        tables[i].style.display = 'none';
    }

    // Show the selected table
    document.getElementById(tableId).style.display = 'block';
}
