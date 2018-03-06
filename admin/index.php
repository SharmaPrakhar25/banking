<?php 
include('header.php'); 
include('sidebar.php');
include('adb.php');
?>
<!-- ========== Left Sidebar Start ========== -->

<!-- ============================================================== -->

<!-- Start right Content here -->

<!-- ============================================================== -->                      

<div class="content-page">

    <!-- Start content -->

    <div class="content">

        <div class="container">



            <!-- Page-Title -->

            <div class="row">

                <div class="col-sm-12">

                    <h4 class="page-title">Dashboard</h4>

                </div>

            </div>



            <div class="row">

                <div class="col-lg-3 col-sm-6">

                    <div class="widget-panel widget-style-2 bg-white">

                        <i class="ti-import"></i>
                        <?php $query = mysqli_query($con,"Select count(*) from deposit");
                        while($query_r = mysqli_fetch_array($query)){

                            ?>
                            <h2 class="m-0 text-dark counter font-600"><?php  echo $query_r['count(*)'];
                        }?></h2>

                        <div class="text-muted m-t-5">Total Deposit</div>

                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="widget-panel widget-style-2 bg-white">

                        <i class="ti-export"></i>
                        <?php $query = mysqli_query($con,"Select count(*) from withdraw");
                        while($query_r = mysqli_fetch_array($query)){

                            ?>
                            <h2 class="m-0 text-dark counter font-600"><?php  echo $query_r['count(*)'];
                        }?></h2>

                        <div class="text-muted m-t-5">Total Withdraw</div>

                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="widget-panel widget-style-2 bg-white">

                        <i class="ti-user"></i>
                        <?php $query = mysqli_query($con,"Select count(*) from customer");
                        while($query_r = mysqli_fetch_array($query)){

                            ?>
                            <h2 class="m-0 text-dark counter font-600"><?php  echo $query_r['count(*)'];
                        }?></h2>

                        <div class="text-muted m-t-5">Total Users</div>

                    </div>


                </div>

                <div class="col-lg-3 col-sm-6">

                    <div class="widget-panel widget-style-2 bg-white">

                        <i class="ti-import"></i>
                        <?php
                        $date = date('Y-m-d');
                        //echo $date; 
                        $query = mysqli_query($con,"select count(*) from deposit where date >= DATE_SUB('$date', INTERVAL 30 DAY)");
                        while($query_r = mysqli_fetch_array($query)){ ?>
                        <h2 class="m-0 text-dark counter font-600"><?php  echo $query_r['count(*)']; }?></h2>
                        <div class="text-muted m-t-5">Total Deposit<?php echo "<br/>" ?>This month</div>
                    </div>

                </div>

            </div>



            <div class="row">

               <div class="col-lg-12">

                  <div class="card-box">

                    <h4 class="text-dark header-title m-t-0"> Recent 5 users</h4>
                    <div class="table-responsive">
                    <div class="col-sm-12">
                         <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Account Number</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>City</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $query = mysqli_query($con,"Select * from customer order by account_number desc");
                                    while($query2 = mysqli_fetch_array($query)){ ?>
                                <tr>
                                    <td><?php echo $query2['name']; ?></td>
                                    <td><?php echo $query2['account_number']; ?></td>
                                    <td><?php echo $query2['email']; ?></td>
                                    <td><?php echo $query2['mobile']; ?></td>
                                    <td><?php echo $query2['city']; ?></td>
                                    <td><?php echo $query2['address']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                  </div>

                </div>	

            </div>
        
        </div>

  </div>

</div> <!-- container -->                             


<?php include('footer.php'); ?>

<script type="text/javascript">

    $(document).ready(function () {

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({keys: true});

        $('#datatable-responsive').DataTable();

        $('#datatable-colvid').DataTable({

            "dom": 'C<"clear">lfrtip',

            "colVis": {

                "buttonText": "Change columns"

            }

        });

        $('#datatable-scroller').DataTable({

            ajax: "assets/plugins/datatables/json/scroller-demo.json",

            deferRender: true,

            scrollY: 380,

            scrollCollapse: true,

            scroller: true

        });

        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});

        var table = $('#datatable-fixed-col').DataTable({

            scrollY: "300px",

            scrollX: true,

            scrollCollapse: true,

            paging: false,

            fixedColumns: {

                leftColumns: 1,

                rightColumns: 1

            }

        });

    });

    TableManageButtons.init();



</script>
