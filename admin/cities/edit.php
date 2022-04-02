<?php require "../../config.php";?>

<?php require BLA.'inc/header.php'; ?>


<?php 

if(isset($_GET['id']) && is_numeric($_GET['id']) )
{    
  
  global $conn;
  $city_id=$_GET['id'];
  $id=$_GET['id'];
  $table='cities';
  $value='city_id';

  $get ="select * from $table where $value ='$id' ";
  $run= mysqli_query($conn, $get);
  $total= mysqli_fetch_array($run);

  
}
else{

    header("location:". BURLA);
}
?>

<div class="col-sm-6 offset-sm-3 border p-3">
 <h3 class=" text-center p-3 bg-primary text-white" > Eidt City</h3>    

<form  method="POST" action="<?php echo BURLA.'cities/update.php' ;?>">

<div class="mb-3">
    <label >New Of City</label>
   
    <input type="name" name="name" class="form-control" value="<?php echo $total['city_name'];?>" >
    <input type="hidden" value="<?php echo $id;?>" name="city_id">
    
  </div>
  
 
  <button type="submit"  name="submit" class="btn btn-success">Save</button>
</form>


</div>


<?php require BLA.'inc/footer.php'; ?>