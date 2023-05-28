<!DOCTYPE html>
<html>
    <head>
        @include('dashbord.header')
    </head>



    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
             @include('dashbord.navbar')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('dashbord.left_sife_menu')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="media-main">
                                            <a class="pull-left" href="#">
                                                <img class="thumb-lg img-circle" src="{{ asset('upload/supplier_image') }}/{{ $supplier->photo }}" alt="">
                                            </a>
                                            <div class="pull-right btn-group-sm">
                                                <a href="{{ route('supplier.edit',$supplier->id) }}" class="btn btn-success waves-effect waves-light tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </div>

                                            <div class="info">
                                                <h4>{{ $supplier->name }}</h4>
                                                <p class="text-muted">{{ $supplier->email }}</p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <ul class="social-links list-inline">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Supplier Type: {{ $supplier->type }}</li>
                                                <li class="list-group-item">Phone_Number: {{ $supplier->phone }}</li>
                                                <li class="list-group-item">City: {{ $supplier->city }}</li>
                                                <li class="list-group-item">Address: {{ $supplier->address }}</li>
                                                <li class="list-group-item">Shop Name: {{ $supplier->shopName }}</li>
                                                <li class="list-group-item">Account Holder: {{ $supplier->account_holder }}</li>
                                                <li class="list-group-item">Account Number: {{ $supplier->account_number }}</li>
                                                <li class="list-group-item">Bank Bame: {{ $supplier->bank_name }}</li>
                                                <li class="list-group-item">Bank Branch: {{ $supplier->bank_branch }}</li>
                                              </ul>
                                        </ul>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div>

                        </div> <!-- End Row -->


                    </div> <!-- container -->



                    </div>

                </div> <!-- content -->
                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->

            <!-- ============================================================== -->
            <!-- Right Sidebar -->
             @include('dashbord.right_slider')
            <!-- /Right-bar -->

        </div>

        <!-- END wrapper -->
       @include('dashbord.script')<!--script link-->
        <!-- COPY TO JAVASCRIPT SECTION  -->
        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image')
                            .attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

        </script>
        <!--datatables-->
         <script src="{{ asset('dashbord') }}/assets/datatables/jquery.dataTables.min.js"></script>
         <script src="{{ asset('dashbord') }}/assets/datatables/dataTables.bootstrap.js"></script>


         <script type="text/javascript">
             $(document).ready(function() {
                 $('#datatable').dataTable();
             } );
         </script>
    </body>
</html>
