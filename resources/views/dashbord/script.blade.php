<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('dashbord') }}/js/jquery.min.js"></script>
<script src="{{ asset('dashbord') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('dashbord') }}/js/waves.js"></script>
<script src="{{ asset('dashbord') }}/js/wow.min.js"></script>
<script src="{{ asset('dashbord') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{ asset('dashbord') }}/js/jquery.scrollTo.min.js"></script>
<script src="{{ asset('dashbord') }}/assets/chat/moment-2.2.1.js"></script>
<script src="{{ asset('dashbord') }}/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="{{ asset('dashbord') }}/assets/jquery-detectmobile/detect.js"></script>
<script src="{{ asset('dashbord') }}/assets/fastclick/fastclick.js"></script>
<script src="{{ asset('dashbord') }}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="{{ asset('dashbord') }}/assets/jquery-blockui/jquery.blockUI.js"></script>



        <!-- CUSTOM JS -->
        <script src="{{ asset('dashbord') }}/js/jquery.app.js"></script>


        <script src="{{ asset('dashbord') }}/assets/timepicker/bootstrap-timepicker.min.js"></script>
        <script src="{{ asset('dashbord') }}/assets/timepicker/bootstrap-datepicker.js"></script>


<!-- sweet alerts -->
<script src="{{ asset('dashbord') }}/assets/sweet-alert/sweet-alert.min.js"></script>
<script src="{{ asset('dashbord') }}/assets/sweet-alert/sweet-alert.init.js"></script>

<!-- flot Chart -->
<script src="{{ asset('dashbord') }}/assets/flot-chart/jquery.flot.js"></script>
<script src="{{ asset('dashbord') }}/assets/flot-chart/jquery.flot.time.js"></script>
<script src="{{ asset('dashbord') }}/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="{{ asset('dashbord') }}/assets/flot-chart/jquery.flot.resize.js"></script>
<script src="{{ asset('dashbord') }}/assets/flot-chart/jquery.flot.pie.js"></script>
<script src="{{ asset('dashbord') }}/assets/flot-chart/jquery.flot.selection.js"></script>
<script src="{{ asset('dashbord') }}/assets/flot-chart/jquery.flot.stack.js"></script>
<script src="{{ asset('dashbord') }}/assets/flot-chart/jquery.flot.crosshair.js"></script>

<!-- Counter-up -->
<script src="{{ asset('dashbord') }}/assets/counterup/waypoints.min.js" type="text/javascript"></script>
<script src="{{ asset('dashbord') }}/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('dashbord') }}/js/jquery.app.js"></script>

<!-- Dashboard -->
<script src="{{ asset('dashbord') }}/js/jquery.dashboard.js"></script>

<!-- Chat -->
<script src="{{ asset('dashbord') }}/js/jquery.chat.js"></script>

<!-- Todo -->
<script src="{{ asset('dashbord') }}/js/jquery.todo.js"></script>

<!-- responsive-table-->
<script src="{{ asset('dashbord') }}/assets/responsive-table/rwd-table.min.js" type="text/javascript"></script>


<!--Form Wizard-->
<script src="{{ asset('dashbord') }}/assets/form-wizard/jquery.steps.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('dashbord') }}/assets/jquery.validate/jquery.validate.min.js"></script>

<!--wizard initialization-->
<script src="{{ asset('dashbord') }}/assets/form-wizard/wizard-init.js" type="text/javascript"></script>

<!-- toastr   -->
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


<script type="text/javascript">
    /* ==============================================
    Counter Up
    =============================================== */
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

    });
</script>

