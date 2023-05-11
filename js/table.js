$(document).ready( function () {
    $('#example').DataTable({
        ordering: false,
        lengthMenu: [[5,10,25,50,-1], [5,10,25,50, "All"]]
    });
});