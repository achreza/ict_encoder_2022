<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="{{URL::to('server/js/main.js')}}"></script>
<script src="{{URL::to('server/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{URL::to('server/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::to('server/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::to('server/js/init/datatables-init.js')}}"></script>
<!--Local Stuff-->
<!-- Scripts -->
<script type="text/javascript">
$(document).ready(function () {
$('#bootstrap-data-table-export').DataTable();
});
</script>