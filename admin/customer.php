<?php 
    include('header.php'); 
    include('sidebar.php');
    include('adb.php'); 

    if(isset($_REQUEST['submit']))
    {
         $name = $_REQUEST['name'];
         $email = $_REQUEST['email'];
         $password = md5($_REQUEST['password']);
         $address = $_REQUEST['address'];
         $city = $_REQUEST['city'];
         $phone = $_REQUEST['phone'];
         //echo $name.$email.$password.$address.$city.$phone;
         $que1  = mysqli_query($con,"Select * from customer");
         if($que1)
         {
            $que1_1 = mysqli_fetch_array($que1);
            if($que1_1['email'] == $email){echo "<script>alert('Email already exist.. ');</script>";}
            else
            {
                 $query1 = mysqli_query($con,"INSERT into customer 
                 SET name='$name',email='$email',password='$password',mobile='$phone',city='$city'");
                 if($query1)
                 {
                    //echo "<script>alert('sign up successfull')</script>";
                    $query2 = mysqli_query($con, "Select account_number from customer where email='$email'");
                    while($query2_r = mysqli_fetch_array($query2))
                    {
                        
                        $acc_number = $query2_r['account_number'];
                        $query2_2 = mysqli_query($con,"INSERT into balance (account_number, balance, email) values ('$acc_number','1000','$email')");
                        if($query2_2)
                        {
                            echo "<script>alert('Successfully created');</script>";
                            $to = $email;
                            $subject = "Account created at Adam and company - bank";
                            $msg = "Hello ".$name."
                                    Your account is created at Adam and company - bank
                                    Your account number is ".$acc_number."
                                    Login using your email ".$email."
                                    and password is ".$_REQUEST['password'] ;
                            mail ($to,$subject,$msg);
                        }
                    }
                    
                 }
            }
            
         }
         
    }

    // balance update query 
    if(isset($_REQUEST['balance'])){
        $newbalance = $_REQUEST['bal'];
        $number = $_REQUEST['number'];

        echo "<script>alert('".$number+$newbalance."');</script>";
        $query3 = mysqli_query($con,"Select balance from balance where account_number='$number'");
        if($query3_1 = mysqli_fetch_assoc($query3)){
            $amount = $query3_1['balance'];
            $amount = $amount + $newbalance; 
            $query3_1_1 = mysqli_query($con,"Update balance set balance='$amount' where account_number='$number'");
            if($query3_1_1){
            echo "<script>alert('Balance updated successfully');</script>";
            }
        }
    }

?>

    <div class="content-page">

        <!-- Start content -->

        <div class="content">

            <div class="container">
               <div class="row">
                <div class="col-sm-6">
                    <h4 class="page-title">Customer</h4>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-primary btn-sm waves-effect waves-light change" data-toggle="modal" data-target="#newModal">Add User</button>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Account Number</th>
                                <th>Balance</th>
                                <th>Add Balance</th>
                                <th>City</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $query = mysqli_query($con,"Select c.name,c.email,c.mobile,c.account_number,c.city,c.address,b.balance 
                                from balance as b,customer as c where c.account_number=b.account_number");
                            while($query_r = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $query_r['name']; ?></td>
                                    <td><?php echo $query_r['email']; ?></td>
                                    <td><?php echo $query_r['mobile']; ?></td>
                                    <td><?php echo $query_r['account_number']; ?></td>
                                    <td><?php echo $query_r['balance'];  ?></td>
                                    <td><button class="btn btn-primary btn-sm waves-effect waves-light row_number" data-toggle="modal" data-target="#newModal1" data-number="<?php echo $query_r['account_number']?>">Add balance</button></td>
                                    <td><?php echo $query_r['city']; ?></td>
                                    <td><?php echo $query_r['address']; ?></td>
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
<!-- Modal of Adding balance -->
<div class="modal fade" id="newModal1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Balance</h4>
      </div>
      <div class="modal-body">

        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post">
                <input type="text" name="bal">
                <input type="hidden" id="number3" name="number">
                <button class="btn btn-primary" type="submit" name="balance">Add balance</button>
            </form>

        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>





<!-- Modal of user registration -->
<div class="modal fade" id="newModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New User registration</h4>
      </div>
      <div class="modal-body">

        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="name" placeholder="Name">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="phone" placeholder="Phone">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <textarea class="form-control" rows="4" cols="50" placeholder="Address" name="address"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="city" placeholder="City">
                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-info text-uppercase waves-effect waves-light" name="submit" type="submit">Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>

<?php include('footer.php'); ?>

<script type="text/javascript">

$(document).ready(function () {

    $('.row_number').on('click',function(){
        var num = $(this).attr('data-number');
        $('#number3').val(num);
    });
 
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