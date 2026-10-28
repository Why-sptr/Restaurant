<script src="{{ asset('assets-admin/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/node-waves/waves.min.js') }}"></script>

<script src="{{ asset('assets-admin/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script src="{{ asset('assets-admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets-admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets-admin/js/app.js') }}"></script>

@if (request()->is('/') || request()->is('dashboard*'))
    <script src="{{ asset('assets-admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/dashboard.init.js') }}"></script>
@endif

@if (request()->is('calendar*'))
    <script src="{{ asset('assets-admin/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/jquery-ui-dist/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/fullcalendar/index.global.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/calendar.init.js') }}"></script>
@endif

@if (request()->is('form*'))
    <script src="{{ asset('assets-admin/js/pages/form-element.init.js') }}"></script>
@endif

@if (request()->is('table*', 'datatable*'))
    <script src="{{ asset('assets-admin/js/pages/datatables.init.js') }}"></script>
@endif

@if (request()->is('alert*'))
    <script src="{{ asset('assets-admin/js/pages/sweet-alerts.init.js') }}"></script>
@endif

@stack('scripts')