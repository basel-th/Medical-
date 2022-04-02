<?php 
require_once('../../config.php');
require_once BLA .'inc/header.php'; 
require_once BL .'function/validate.php';
 

?>

<?php



if(isset($_POST['submit']))
{

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    if(checkEmpty($name) || checkEmpty($email) || checkEmpty($password))
    {
      if(ValidEmail($email))
      {
        $hashedPassword= password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `admins`( `admin_name`, `admin_email`, `admin_password`) VALUES ('$name','$email','$password')";
        $success_message =db_insert($sql);
        

              }  
      else
      {
        $error_message="Please correct email";

      }
    }
    else
    {

       $error_message = "Please Fill All Filds";
    }

    require BL .'function/messages.php';
}
?>





<div class="col-sm-6 offset-sm-3 border p-3">
 <h3 class=" text-center p-3 bg-primary text-white" > Add New Admin</h3>    

<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

<div class="mb-3">
    <label >Name</label>
    <input type="name" name="name" class="form-control" >
    
  </div>

  <div class="mb-3">
    <label >Email address</label>
    <input type="email"  name="email" class="form-control">
   
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  
  <button type="submit"  name="submit" class="btn btn-primary">Save</button>
</form>


</div>




<?php  require_once BLA .'inc/footer.php'; ?> 