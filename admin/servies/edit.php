<?php require "../../config.php";?>

<?php require BLA.'inc/header.php'; ?>




<?php 

if(isset($_GET['id']) && is_numeric($_GET['id']))
{ 


  global $conn;
  $srev_id=$_GET['id'];
  $id=$_GET['id'];
  $table='services';
  $value='ser_id';

  $get ="select * from $table where $value ='$id' ";
  $run= mysqli_query($conn, $get);
  $total= mysqli_fetch_array($run);

  
}
else{

    header("location:". BURLA);
}
?>
<div class="col-sm-6 offset-sm-3 border p-3">
 <h3 class=" text-center p-3 bg-primary text-white" > Eidt Servie</h3>    

<form  method="POST" action="<?php echo BURLA.'servies/update.php' ;?>">

<div class="mb-3">
    <label >New Of Servie</label>
   
 
    <input type="name" name="name" class="form-control" value="<?php echo $total['serv_name'] ;?>" >
    <input type="hidden" value="<?php echo $srev_id;?>" name="serv_id">
    
  </div>
 
  
  <button type="submit"  name="submit" class="btn btn-success">Save</button>
</form>


</div>

<?php require BLA.'inc/footer.php'; ?>