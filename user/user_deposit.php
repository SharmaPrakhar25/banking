<?php 
include('header.php');
include('udb.php');

if(isset($_REQUEST['submit']))
{
  //echo "<script>alert('".$_SESSION["account_number"]."');</script>";
  $amount= $_REQUEST['amount'];
  $message= $_REQUEST['message'];
  $date = date('Y-m-d');
  $insert1 = mysqli_query($con,"INSERT into deposit SET amount = '$amount', message = '$message', date ='$date', account_number='".$_SESSION["account_number"]."' ");
}


?>



<style>
.m-t-15 {
  margin-top: 6px !important;
  margin-right: 24px;
}
</style>
<div class="content-page">

  <!-- Start content -->

  <div class="content">

    <div class="container">



      <!-- Page-Title -->

      <div class="row">
        <div class="col-lg-12">
          <div class="btn-group pull-right m-t-15">
           <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="modal" data-target="#myModal">Add New Deposit<span class="m-l-5"><i class="fa fa-plus"></i></span></button>
         </div>
         <div class="card-box">
           <h4 class="text-dark header-title m-t-0">Deposit</h4>
           <div class="table-responsive">
            <table class="table">
              <tr>
                <th>S.No:</th>
                <th>account_number</th>
                <th> message</th>
                <th> Amount</th>
                <th>Date</th>
                <th>Status</th>
              </tr>

              <?php 
              $query = mysqli_query($con,"SELECT * from deposit where account_number='".$_SESSION["account_number"]."'");
              while($query_d=mysqli_fetch_array($query))
              {
               ?>
               
               <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $query_d['account_number']?></td>
                <td><?php echo $query_d['message']?></td>
                <td><?php echo $query_d['amount']?></td>
                <td><?php echo $query_d['date']?></td>
                <td><?php echo $query_d['status']?></td>
                
              </tr>
              <?php } ?>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Deposit</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" role="form" data-parsley-validate="" novalidate="" method="post">
        <div class="form-group">
         <label for="inputAmount" class="col-sm-4 control-label">Amount*</label>
         <div class="col-sm-7">
          <input type="text" required="" parsley-type="amount" name="amount" class="form-control" id="inputAmount" placeholder="Amount">
        </div>
      </div>
      <div class="form-group">
       <label for="inputAmount" class="col-sm-4 control-label">Message*</label>
       <div class="col-sm-7">
        <textarea required="" class="form-control" name="message"></textarea>
      </div>
      <input type="hidden" name="account_number" id="accnumber" value="">
    </div>
    <div class="form-group">
     <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" name="submit" id="submitButton" class="btn btn-primary waves-effect waves-light">
       Submit
     </button>
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
