<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>
   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('/')}}/design/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/')}}/design/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/design/admine/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
{{-- <script src="{{url('/')}}/design/admin/plugins/chart.js/Chart.min.js"></script> --}}
<!-- Sparkline -->
<script src="{{url('/')}}/design/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{url('/')}}/design/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('/')}}/design/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{url('/')}}/design/admin/plugins/moment/moment.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('/')}}/design/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{url('/')}}/design/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('/')}}/design/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/design/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/')}}/design/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/')}}/design/admin/dist/js/pages/dashboard.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="{{url('/')}}/design/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/design/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{url('/')}}/design/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/jszip/jszip.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/design/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/')}}/design/admin/dist/js/demo.js"></script>
<!-- Page specific script -->

<script src="{{url('/')}}/design/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{url('/')}}/design/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>



<script src="{{asset("js/main.js")}}"></script>
<script>

$( () => {
        $("#example1").DataTable({
            
            
          "responsive": false, "lengthChange": true, "autoWidth": true ,"paging":true, "pageLength":50,
          dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible',
                    
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'copy',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'colvis'
        ],
        
    
           
        });

    });
</script>
<script>
          var start_date = new Date().toISOString().split('T')[0];
        document.getElementsByName("start_date")[0].setAttribute('min', start_date);
        var end_date = new Date().toISOString().split('T')[0];
        document.getElementsByName("end_date")[0].setAttribute('min', end_date);
          function addFunction() {
              event.preventDefault();
              var form = document.getElementById("fo1");
              Swal.fire({
        title: 'Are you sure?',
        text: " work has been saved",

        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, save it!'

      }).then((result) => {
        if (result.value) {
            console.log(form);

          form.submit();
          
        }
      })
          }
</script>

<script>

</script>
</footer>
</body>
</html>