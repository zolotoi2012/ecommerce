@section('scripts')
<script src="{{ asset('adminLTE/vendors/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('adminLTE/assets/js/main.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('adminLTE/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>

<script src="{{ asset('adminLTE/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/pdfmake/build/vfs_fonts.js"') }}"></script>
<script src="{{ asset('adminLTE/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adminLTE/vendors/datatables.net-buttons/js/buttons.print.min.js"') }}"></script>
<script src="{{ asset('adminLTE/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('adminLTE/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
@endsection

@yield('scripts')