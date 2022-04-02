<?php require "../../config.php";?>

<?php require BLA.'inc/header.php'; ?>

<?php require BL.'function/validate.php'; ?>


<?php
if(isset($_POST['submit'])){

    $name=$_POST['name'];
   
    if(checkEmpty($name) && checkless($name,3) ) {

        $sql = "INSERT INTO `cities`( `city_name`) VALUES ('$name')";
        $success_message =db_insert($sql);
        

              }  
     
    
    else
    {

       $error_message = "Please Fill All Filds";
    }

    require BL .'function/messages.php';
    }
 

?>

<div class="col-sm-6 offset-sm-3 border p-3">
 <h3 class=" text-center p-3 bg-primary text-white" > Add New City</h3>    

<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

<div class="mb-3">
    <label >New Of City</label>
    <input type="name" name="name" class="form-control" >
    
  </div>
 
  
  <button type="submit"  name="submit" class="btn btn-success">Save</button>
</form>


</div>

<?php require BLA.'inc/footer.php'; ?>