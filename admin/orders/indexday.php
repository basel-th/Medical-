<?php require "../../config.php";?>

<?php require BLA.'inc/header.php'; ?>

<?php require BL.'function/validate.php'; ?>

<div class="col-sm-12">
    <h3 class="text-center p-3 bg-primary text-white ">View All Orders In Today </h3>
    <table class=" table table-dark table-bordered">
        <thead>
            <tr class="text-center">
                <th class="col">#</th>
                <th class="col"> Name </th>
                <th class="col"> Mobile</th>
                <th class="col">Email</th>
                <th class="col"> Notes</th>
                <th class="col"> Service</th>
                <th class="col"> City</th>
                <th class="col">Time</th>
                <th class="col"> Action</th>
            </tr>
        </thead>
        <tbody>
             <?php /*
$time= 2021-11-14 ;
echo$time;
                     

                        global $conn;
                       
                        $id = $time;;
                        $table='orders';
                        $value='order_created_at';

                        $get ="select * from $table where $value ='$id' ";
                        $run= mysqli_query($conn, $get);
                        $total= mysqli_fetch_array($run);

                       print_r($total);

                       echo$total;*/
                       
?>

         <?php  $Today='20'.date("y-m-d")?>

         <?php   $data= getDayRows('orders','order_created_at',$Today); $x=1;?>
         <?php foreach($data as $row){ ?>
        <tr class="text-center">
        <td scope="row" ><?php echo $x; ?></td>
        <td class="text-center"> <?php echo $row['order_name']?> </td>
        <td class="text-center"> <?php echo $row['order_email']?> </td>
        <td class="text-center"> <?php echo $row['order_mobile']?> </td>
        <td class="text-center"> <?php echo $row['order_notes']?> </td>
        <td class="text-center"> 
            <?php
                
                global $conn;

                $id=$row['order_serv_id'];
                $table='services';
                $value='ser_id';

                $get ="select * from $table where $value ='$id' ";
                $run= mysqli_query($conn, $get);
                $total= mysqli_fetch_array($run);
                            
                echo $total['serv_name'];

             ?>  
        </td>
        <td class="text-center">

            <?php
                
                global $conn;

                $id=$row['order_city_id'];
                $table='cities';
                $value='city_id';

                $get ="select * from $table where $value ='$id' ";
                $run= mysqli_query($conn, $get);
                $total= mysqli_fetch_array($run);

                echo $total['city_name'];

             ?>
  
        </td>
        <td class="text-center"> <?php echo $row['order_created_at']?> </td>

        <td class="text-center">
           




            <a href="<?php echo BURLA ."orders/delet.php?id=".  $row['order_id']; ?>" class="btn btn-danger delete" data.field="order_id" data_id="<?php echo $row['order_id']; ?>" data-table="orders">Delete</a>
   </td>
   
   </tr>
   <?php $x++;}?>
  

        </tbody>
    </table>
</div>


<?php require BLA.'inc/footer.php'; ?>