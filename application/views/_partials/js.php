<!-- jQuery -->
<script src="<?= base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/dist/js/demo.js"></script>

<!-- JS Menu Kategori, Artikel -->
<!-- DataTables  & Plugins -->
<script src="<?= base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url()?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url()?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- /JS Menu Kategori, Artikel -->

<!-- Menu Addkategori -->
<!-- bs-custom-file-input -->
<script src="<?= base_url()?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<!-- /Menu Addkategori -->

<!-- Menu Add Artikel -->
<!-- Summernote -->
<script src="<?= base_url()?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<!-- bs-custom-file-input -->
<script src="<?= base_url()?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>