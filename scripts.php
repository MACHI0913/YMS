<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/multiselect.min.js"></script>

<script src="assets/js/jquery-ui.min.js"></script>

<script src="assets/js/jquery.ui.touch-punch.min.js"></script>

<script src="assets/js/chart.min.js"></script>

<script src="assets/js/select2.min.js"></script>

<script src="assets/js/dropfiles.js"></script>

<script src="assets/js/chart.js"></script>

<script src="assets/js/app.js"></script>

<script src="assets/js/moment.min.js"></script>

<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>

<script src="assets/js/fullcalendar.min.js"></script>

<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>

<!--edit Carrier button FUnctional-->
<script type="text/javascript">
    $('#edit_Carrier').on('show.bs.modal', function(e) {
    var carrierid = $(e.relatedTarget).data('id');
    var carriername = $(e.relatedTarget).data('name');
    $(e.currentTarget).find('input[name="carrid"]').val(carrierid);
    $(e.currentTarget).find('input[name="carrname"]').val(carriername);
});
</script>