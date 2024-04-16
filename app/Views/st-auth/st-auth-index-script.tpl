<script>
    $(function() {
        $("#st_table").DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#st_table_wrapper .col-md-6:eq(0)');
    });
</script>