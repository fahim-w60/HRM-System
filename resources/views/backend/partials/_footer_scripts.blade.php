    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('layouts/vertical-dark-menu/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('src/assets/js/dashboard/dash_1.js') }}"></script>

    
    <script src="{{ asset('src/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/table/datatable/datatables.js')}}"></script>
    <script src="{{ asset('src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('src/assets/js/apps/invoice-list.js')}}"></script>
    <script src="{{asset('src/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
        }
    @endif 
</script>
 

 

  



    <!-- BEGIN PAGE LEVEL PLUGINS -->
    @yield('page_level_js_plugins')
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    @yield('page_level_js_scripts')
    <!-- END PAGE LEVEL SCRIPTS -->