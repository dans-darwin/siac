<!-- jQuery 3 -->
<script src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('bower_components/Chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('dist/js/pages/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>
<!-- Admin Datatables -->
<script src="{{URL::asset('datatables/js/jquery.datatables.min.js')}}"></script>
<!-- Admin Text Editor -->
<script src="{{URL::asset('summernote-master/dist/summernote.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#summernote').summernote({
    height: 150
  });
});
</script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example1').DataTable();
} );
</script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example2').DataTable();
} );
</script>