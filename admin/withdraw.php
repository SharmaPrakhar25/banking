<?php 
      include('header.php');
      include('sidebar.php');
      include('adb.php');
?>
<?php 
    
    if(isset($_REQUEST['status'])){
        
        $id = $_REQUEST['change_status_id'];
        $status = $_REQUEST['status'];
        $amount= $_REQUEST['change_status_amount'];
        $accountnumber = $_REQUEST['change_status_accountnumber'];

        
        if($status == "Approved")
        {
            $status = "Completed";
            $query1 = mysqli_query($con,"Select * from balance where account_number='$accountnumber'");
            while($query1_r = mysqli_fetch_array($query1))
            {
                //print_r($query1_r);
                $bal = $query1_r['balance'];
                if($bal > $amount){
                    $bal = $bal - $amount;
                    $query1_1 = mysqli_query($con,"Update balance set balance='$bal' where account_number='$accountnumber'");
                    if($query1_1){
                    $query1_2 = mysqli_query($con, "Select email from customer where account_number='$accountnumber'");
                    while($query1_2_r = mysqli_fetch_array($query1_2)){
                            $email = $query1_2_r['email'];
                            $to = $email;
                            $subject = "Wihdrawl Approved";
                            $message = "Your withdrawl request for Account number ".$accountnumber." of Amount ".$amount." is approved. Your current balance is ".$balance;
                            mail($to,$subject,$message);
                        }
                    }   
                }
                else
                {
                    $status = "Declined";
                    $query1_3 = mysqli_query($con,"Update withdraw set status='$status' where account_number='$accountnumber'");
                    if($query1_4 = mysqli_query($con,"Select email from customer where account_number='$accountnumber'")){
                        $query1_4_r = mysqli_fetch_array($query1_4);
                        $email = $query1_4_r['email'];
                            $to = $email;
                            $subject = "Wihdrawl Declined";
                            $message = "Your withdrawl request for Account number ".$accountnumber." of Amount ".$amount." is declined. Your current    balance is ".$balance;
                            mail($to,$subject,$message);
                        echo "<script>alert('Transaction has been declined because of less amount.')</script>";
                    }
                }
            }
        }
        else{
            $status = "Declined";
            $query2_1 = mysqli_query($con, "Select email from customer where account_number='$accountnumber'");
            while($query2_2_r = mysqli_fetch_array($query2_1))
            {
                $email = $query2_2_r['email'];
                $to = $email;
                $subject = "Wihdrawl Declined";
                $message = "Your withdrawl request for Account number ".$accountnumber." of Amount ".$amount." is Declined.";
                mail($to,$subject,$message);
            }
        }
        
       $query_2 = mysqli_query($con,"Update withdraw set status='$status' where id='$id'");
    }
    
?>

<div class="content-page">

                <!-- Start content -->

                <div class="content">

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Withdraw</h4>
                            </div>
                        </div>  
                        <!-- Page-Title -->

                        <div class="row">
                        <div class="col-lg-12">
                          <div class="card-box">
                             <h4 class="text-dark header-title m-t-0"></h4>
                             <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No:</th>
                                            <th>Account Number</th>
                                            <th>Withdraw Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $query = mysqli_query($con,"Select * from withdraw order by id desc");
                                        while($query_r = mysqli_fetch_array($query)){
                                    //print_r($query_r);
                                            ?>
                                            <tr>
                                                <td><?php echo $query_r['id']; ?></td>
                                                <td><?php echo $query_r['account_number']; ?></td>
                                                <td><?php echo $query_r['amount']; ?></td>
                                                <td><?php echo $query_r['date']; ?></td>
                                                <td><?php echo $query_r['status']; ?></td>
                                                <td><button class="btn btn-primary btn-sm waves-effect waves-light change" data-id="<?php echo $query_r['id']; ?>" data-amount="<?php echo $query_r['amount']; ?>" data-account_number="<?php echo $query_r['account_number']?>" data-toggle="modal" data-target="#newModal">Change Status</button></td>
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
 <div class="modal fade" id="newModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Withdraw</h4>
        </div>
        <div class="modal-body">
         <form class="form-horizontal" role="form" data-parsley-validate="" novalidate="" method="post">
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-8">
                    <p>Change Withdraw status</p>
						<button type="submit" name="status" value="Approved" class="btn btn-success waves-effect waves-light">
							Approve
						</button> 
						<button type="submit" name="status" value="Declined" class="btn btn-danger waves-effect waves-light m-l-5">
							Decline
						</button>
                        <input type="hidden" id="field1" name="change_status_id" value=" "/>
                        <input type="hidden" id="field2" name="change_status_amount" value=" "/>
                        <input type="hidden" id="field3" name="change_status_accountnumber" value=" "/>
					</div>
				</div>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<?php include('footer.php'); ?>
<script>
        $( document ).ready(function() {
            $('.change').on('click',function()
            {
               var id = $(this).attr('data-id');
               var amount = $(this).attr('data-amount');
               var account_number = $(this).attr('data-account_number');
               //alert(id+" "+amount+" "+account_number);
               $("#field1").val(id);
               $("#field2").val(amount);
               $("#field3").val(account_number);
               
            });
        });     
</script>
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
