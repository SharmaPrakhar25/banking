<?php
include('header.php');
include('udb.php');
      //echo $_SESSION["account_number"];
  if(isset($_REQUEST['submit'])){
      $parent_name = $_REQUEST['your_name'];
      $parent_account_number = $_REQUEST['your_a_number'];
      $name = $_REQUEST['b_name'];
      $b_accountnumber = $_REQUEST['b_account_number'];

      //Search his account number existed or not 

      $search1 = mysqli_query($con,"SELECT name, account_number from customer where email ='".$_SESSION["email"]."' AND name='$parent_name'");
      $search1_1 = mysqli_fetch_assoc($search1);

      if($search1_1['account_number'] == $parent_account_number){
          $search1_2 = mysqli_query($con,"SELECT name, account_number from customer where name='$name'");
          $search1_3 = mysqli_fetch_assoc($search1_2);
          if($search1_3['account_number'] == $b_accountnumber){
            $insert1 = mysqli_query($con,
            "INSERT INTO beneficiary(parent_name,parent_account_number,beneficiary_acc_number)VALUES ('$parent_name','$parent_account_number','$b_accountnumber')");
            if($insert1){
              echo "<script>alert('".$name." with account number ".$b_accountnumber." has been added in your beneficiary list.');</script>";
            }
          }
          else{
            echo "<script>alert('No account by the name of ".$name." number of ".$b_accountnumber.".');</script>";
          }
      }
      else{
        echo "<script>alert('No account by the name of ".$parent_name." number of ".$parent_account_number.".');</script>";
      }
  }


  if(isset($_REQUEST['t_submit'])){
    // Taking account number of the user and the target account number 
    $from_acc_number = $_REQUEST['u_account'];
    $to_acc_number = $_REQUEST['b_account'];
    $amount = $_REQUEST['amount'];
    //checking users account number 
    $qur0 = mysqli_query($con,"SELECT * from customer where email = '".$_SESSION["email"]."'");
       $qur0_r = mysqli_fetch_assoc($qur0);
    // echo "<script>alert('".$_SESSION["email"]."');</script>";
       // print_r($qur0_r);
    // exit;
    if($qur0_r['account_number'] == $from_acc_number){
      
      // If account number is checked then check target account number is in beneficairy or not 
      $qur1 = mysqli_query($con,"SELECT beneficiary_acc_number from beneficiary where parent_account_number='$from_acc_number'");
      $qur1_r = mysqli_fetch_assoc($qur1);

      if($qur1_r['beneficiary_acc_number'] == $to_acc_number){
        // if beneficairy account number is ==== target account number 
        // set the date 
        $date = date('Y-m-d');
        $msg = $_REQUEST['msg'];

        // INSERT the transaction into the database
        $qur2 = mysqli_query($con,"INSERT into transaction (from_acc_number,to_acc_number,date,email,message) VALUES('$from_acc_number','$to_acc_number','$date','".$_SESSION["email"]."','$msg')");
        if($qur2){

          // after saving transaction into transaction table get the check the balance 
          $qur3 = mysqli_query($con,"SELECT * from balance where account_number='$from_acc_number'");
          $qur3_r = mysqli_fetch_assoc($qur3);
          if($qur3_r['balance'] > $amount){
            // if balance is available then reduce the amount and update the balance table 

            $bal = $qur3_r['balance'] - $amount;
            $qur4 = mysqli_query($con,"UPDATE balance set balance='$bal' where account_number='$from_acc_number'");
            if($qur4){
              // update the balance in target account 
              $qur5 = mysqli_query($con,"SELECT * from balance where account_number='$to_acc_number'");
              if($qur5_r = mysqli_fetch_assoc($qur5)){
                $tar_bal = $amount + $qur5_r['balance'];
                $qur6 = mysqli_query($con,"UPDATE balance set balance='$tar_bal' where account_number='$to_acc_number'");
                echo "<script>alert('Transaction successfull');</script>";
              }
            }
          }
          else{
            echo "<script>alert('You don't have sufficient balance');</script>";
          }
        }
      }
      else{
        echo "<script>alert('No beneficiary in your account');</script>";
      }
    }
    else{
      echo "<script>alert('Your account number does not match');</script>";
    }

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
           <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="modal" data-target="#myModal" style="margin-right: 30px;">Add Beneficiary<span class="m-l-5"><i class="fa fa-plus"></i></span></button>
         <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="modal" data-target="#tModal">Add Transaction<span class="m-l-5"><i class="fa fa-plus"></i></span></button>
         </div>
         <div class="card-box">
           <h4 class="text-dark header-title m-t-0">Transaction</h4>
           <div class="table-responsive">
            <table class="table">
              <tr>
                <th>S.No:</th>
                <th>Account Number</th>
                <th>Target Account Number</th>
                <th>message</th>
                <th>Date</th>
              </tr>
              <?php 
              //echo "<script>alert('".$_SESSION["account_number"]."')</script>";
              $query = mysqli_query($con,"Select * from transaction where email='".$_SESSION["email"]."'");
              while($query_r=mysqli_fetch_array($query))
              {
               ?>
               
               <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $query_r['from_acc_number']?></td>
                <td><?php echo $query_r['to_acc_number']?></td>
                <td><?php echo $query_r['message']?></td>
                <td><?php echo $query_r['date']?></td>
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
        <h4 class="modal-title">Add beneficiary</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" role="form" data-parsley-validate="" method="Post">
        <div class="form-group">
         <label for="inputAmount" class="col-sm-4 control-label">Your name</label>
         <div class="col-sm-7">
          <input type="text" required="" parsley-type="amount" name="your_name" class="form-control" id="inputAmount" placeholder="Name" required="">
        </div>
      </div>
      <div class="form-group">
         <label for="inputAmount" class="col-sm-4 control-label">Your Account Number</label>
         <div class="col-sm-7">
          <input type="text" required="" parsley-type="amount" name="your_a_number" class="form-control" id="inputAmount" placeholder="Name" required="">
        </div>
      </div>
      <div class="form-group">
         <label for="inputAmount" class="col-sm-4 control-label">Beneficiary Name</label>
         <div class="col-sm-7">
          <input type="text" required="" parsley-type="amount" name="b_name" class="form-control" id="inputAmount" placeholder="Name" required="">
        </div>
      </div>
      <div class="form-group">
       <label for="inputAmount" class="col-sm-4 control-label">Beneficiary Account Number</label>
       <div class="col-sm-7">
        <input type="text" name="b_account_number" class="form-control" placeholder="Account Number" required="">
      </div>
    </div>
    <div class="form-group">
     <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" id="submitButton" name="submit" class="btn btn-primary waves-effect waves-light">
       Add Beneficiary
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

<div class="modal fade" id="tModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Transaction</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" role="form" data-parsley-validate="" method="Post">
        <div class="form-group">
         <label for="uaccount" class="col-sm-4 control-label">Your Account</label>
         <div class="col-sm-7">
          <input type="text" required="" parsley-type="uaccount" name="u_account" class="form-control" id="uaccount" placeholder="Your Account Number" required="">
        </div>
      </div>
      <div class="form-group">
         <label for="baccount" class="col-sm-4 control-label">Benificial Account Number</label>
         <div class="col-sm-7">
          <input type="text" required="" parsley-type="baccount" name="b_account" class="form-control" id="baccount" placeholder="Benificial Account Number" required="">
        </div>
      </div>
      <div class="form-group">
         <label for="baccount" class="col-sm-4 control-label">Amount</label>
         <div class="col-sm-7">
          <input type="text" required="" parsley-type="baccount" name="amount" class="form-control" id="baccount" placeholder="Amount" required="">
        </div>
      </div>
    <div class="form-group">
     <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" id="submit" name="t_submit" class="btn btn-primary waves-effect waves-light">
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
