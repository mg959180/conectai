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

</body>

</html>