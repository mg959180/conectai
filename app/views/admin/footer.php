<?php if ($header_footer) {
    require_once ADMIN_VIEW_DIR . 'nav_bar_end.php';
} ?>
<!-- Bootstrap core JavaScript-->
<script src="<?= ADMIN_ASSETS_URL ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= ADMIN_ASSETS_URL ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= ADMIN_ASSETS_URL ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= ADMIN_ASSETS_URL ?>js/main.min.js"></script>

<?php if ($show_data_table) {  ?>
    <!-- Page level plugins -->
    <script src="<?= ADMIN_ASSETS_URL ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= ADMIN_ASSETS_URL ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="<?= ADMIN_ASSETS_URL ?>js/datatable/datatables.js"></script>
<?php } ?>

<?php if ($show_chart) {  ?>
    <!-- Page level plugins -->
    <script src="<?= ADMIN_ASSETS_URL ?>vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="<?= ADMIN_ASSETS_URL ?>js/chart/chart-area.js"></script>
    <script src="<?= ADMIN_ASSETS_URL ?>js/chart/chart-pie.js"></script>
<?php } ?>

<script>
    function custom_alert(type, msg) {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = `<div class="alert ${bs_class} alert-dismissible fade show" role="alert">
        <strong class="me-3">${msg}</strong>
        <button type="button" class="btn-close btn btn-sm" onclick="return remAlert();" data-bs-dismiss="alert" aria-label="Close">X</button>
      </div>`;
        let error_div = document.getElementById('error-div');
        error_div.innerHTML= element;
        setTimeout(remAlert, 3000);
    }

    function remAlert() {
        if (document.getElementsByClassName('alert').length) {
            document.getElementsByClassName('alert')[0].remove();
        }

    }
</script>
</body>

</html>