<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/select2.min.js"></script>

<script src="assets/js/multiselect.min.js"></script>

<script src="assets/js/jquery.ui.touch-punch.min.js"></script>

<script src="assets/js/chart.min.js"></script>

<script src="assets/js/dropfiles.js"></script>

<script src="assets/js/chart.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<script src="assets/js/jquery.fullcalendar.js"></script>

<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>

<script src="assets/js/app.js"></script>

<!--edit Carrier button FUnctional-->
<script type="text/javascript">
    $('#edit_Carrier').on('show.bs.modal', function(e) {
    var carrierid = $(e.relatedTarget).data('id');
    var carriername = $(e.relatedTarget).data('name');
    var carriertype = $(e.relatedTarget).data('typeid');
    $(e.currentTarget).find('input[name="carrid"]').val(carrierid);
    $(e.currentTarget).find('input[name="carrname"]').val(carriername);
    //$(e.currentTarget).find('select[name="carrier_type"]').val(carriertype);
    });

    $('#delete_carrier').on('show.bs.modal', function(e) {
    var carrierid = $(e.relatedTarget).data('id');
    var carriername = $(e.relatedTarget).data('name');
    var carriertype = $(e.relatedTarget).data('typeid');
    $(e.currentTarget).find('input[name="carrid"]').val(carrierid);
    $(e.currentTarget).find('input[name="carrname"]').val(carriername);
    $(e.currentTarget).find('input[name="carrier_type"]').val(carriertype);
    });

    $('#edit_carrtype').on('show.bs.modal', function(e) {
    var carrtypeid = $(e.relatedTarget).data('id');
    var carrtypename = $(e.relatedTarget).data('name');
    $(e.currentTarget).find('input[name="carrtypeid"]').val(carrtypeid);
    $(e.currentTarget).find('input[name="carrtypename"]').val(carrtypename);
    });

    $('#delete_carrtype').on('show.bs.modal', function(e) {
    var carrtypeid = $(e.relatedTarget).data('id');
    var carrtypename = $(e.relatedTarget).data('name');
    $(e.currentTarget).find('input[name="carrtypeid"]').val(carrtypeid);
    $(e.currentTarget).find('input[name="carrtypename"]').val(carrtypename);
    });

    $('#show_container').on('show.bs.modal', function(e) {
    var containerid = $(e.relatedTarget).data('id');
    var contnum = $(e.relatedTarget).data('contnum');
    var arrivaldate = $(e.relatedTarget).data('adate');
    var carriername = $(e.relatedTarget).data('carrname');
    var location = $(e.relatedTarget).data('location');
    var loadstatus = $(e.relatedTarget).data('loadstatus');
    var contdesc = $(e.relatedTarget).data('contdesc');
    var dif = $(e.relatedTarget).data('dif');
    var arrival = $(e.relatedTarget).data('arrival');
    var created = $(e.relatedTarget).data('created');
    var departure = $(e.relatedTarget).data('departure');
    var updated = $(e.relatedTarget).data('updated');
    $(e.currentTarget).find('input[name="containerid"]').val(containerid);
    $(e.currentTarget).find('input[name="container_num"]').val(contnum);
    $(e.currentTarget).find('input[name="arrival_date"]').val(arrivaldate);
    $(e.currentTarget).find('input[name="carrier_name"]').val(carriername);
    $(e.currentTarget).find('input[name="location"]').val(location);
    $(e.currentTarget).find('input[name="load_status"]').val(loadstatus);
    $(e.currentTarget).find('input[name="cont_desc"]').val(contdesc);
    $(e.currentTarget).find('input[name="dif"]').val(dif);
    $(e.currentTarget).find('input[name="arrival_date"]').val(arrival);
    $(e.currentTarget).find('input[name="created_date"]').val(created);
    $(e.currentTarget).find('input[name="departure_date"]').val(departure);
    $(e.currentTarget).find('input[name="updated_date"]').val(updated);
    });
</script>