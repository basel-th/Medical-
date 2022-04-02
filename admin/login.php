<?php 

    require_once('../config.php');

    require_once BL .'function/validate.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--Bootstrap css -->
        <link rel="stylesheet" href="<?php echo ASSETS ;?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
        <link rel="stylesheet" href="<?php echo ASSETS ;?>/css/style.css">
        <link rel="stylesheet" href="<?php echo ASSETS ;?>/css/bootstrapt.min.css">
      
        <title>Dashborad | Login </title>
    </head>
<body class="bg-dark" >

<?php

  if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $password=$_POST['password'];

    if(checkEmpty($email) && checkEmpty($password) ) {

      if(ValidEmail($email)){
         
        //$check = getRow('admins','admin_email',$email);
        
          global $conn;
  
          $table='admins';
          $value='admin_email';

          $get ="select * from $table where $value ='$email' ";
          $run= mysqli_query($conn, $get);
          $check= mysqli_fetch_array($run);
         

        $check_password =password_verify($password,$check['admin_password']);
        echo $password ;

        if($password)
        {
         
          
        $_SESSION['admin_name'] = $check['admin_name'];
        $_SESSION['admin_email'] = $check['admin_email'];
        $_SESSION['admin_id'] = $check['admin_id'];

        echo"sussse";
        header("Location:".BURLA.'index.php');

        }else{
          echo"rroer";
        }

      } 
      else{

        $error_message ="Please Type Correct  Email";

      }


    } else
    {
      $error_message ="Fill All Fild ";

    }

  }
?>

  <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto mt-5 w-75  ">
                <div class="card bg-dark mt-5 border-primary w-100">
                    <div class="card-title  text-white mt-5  bg-primary">
                        <h3 class="text-center py-3"> ADMIN LOGIN  </h3>
                    </div>
                    <div class="card-body">
                    <form action="<?php  echo $_SERVER['PHP_SELF'] ;?>" method="POST" class="  p-4 ">
          <div class="row">

              <?php require  BL .'function/messages.php' ; ?>
           <div class="col-sm-12 " >
             
              </div>

              <div class="col-sm-6 offset-sm-3">
                                   
              </div>
              <div class="form-group text-white p-2">
                    <label> Email </label>
                    <input type="email" name="email" class="form-control p-2">
                  </div>
              <div class="form-group p-2 text-white ">
                    <label> Pssword </label>
                    <input type="password" name="password" class="form-control p-2">
                  </div>
              <div class="form-group  p-2">
                <input type="submit" name="submit" class="btn btn-success mt-3">
            </div>
          </div>

      
        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



  
  <!-- optional javescript -->
  <!--jquary frist ,than poppor,js ,than boostrap js -->
  <script src="<?php echo ASSETS ;?>/js/bootstrap.min.js"></script>
  <script scr="<?php echo ASSETS ;?>/js/jquery-3.6.0.min.js"></script>
  <script scr="<?php echo ASSETS ;?>/js/poper.3.4.1.min.js"></script>
  
  </nav>
</body>
</html>