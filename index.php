<?php 
   // CALL THE PAGE OF CONFIG  BY BASEL AHMED 

    require_once('config.php');

    require_once BL .'function/validate.php';
      
?>
   
<?php

  // INSERT THE DATA   FROM THE FORM TO DATABASE 

  if(isset($_POST['submit']))
    {
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $notes=$_POST['notes'];
        $srev=@$_POST['srevice'];
        $city=@$_POST['city'];

        
        if( checkEmpty($srev) || checkEmpty($city) || checkEmpty($name) || checkEmpty($email) || checkEmpty( $mobile))
        {
          if(ValidEmail($email))
          {
            $sql = "INSERT INTO `orders`( `order_name`, `order_mobile`, `order_email`,`order_notes`,`order_serv_id`,`order_city_id`) VALUES ('$name','$email','$mobile','$notes','$srev','$city')";
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

<!DOCTYPE html >
<html lang="en" class="p">
  <head>
      <!-- Required meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <!--Bootstrap css -->
      <link rel="stylesheet" href="<?php echo ASSETS ;?>/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
      <link rel="stylesheet" href="<?php echo ASSETS ;?>/css/style3.css">
      <link rel="stylesheet" href="<?php echo ASSETS ;?>/css/bootstrapt.min.css">
      <title>Dashborad | Home Page</title>
  </head>
<body class="" >
 

      <div class="col-sm-6 offset-sm-4 border p-5 mm">

          <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="row g-9 needs-validation" novalidate>

              <div class="col-lg-12 text-center text-white">
                <h1 class="p-2">Madical Survey</h1>
              </div>
              <hr>
              <div class="col-md-6 text-white">
                  <label for="validationCustom04" class="form-label ">Choose Service</label>
                  <select class="form-select" name="srevice" required>
                    <option selected disabled value="">Choose...</option>

                    //THIS FUNCTION FORM PAGE Function/db.php  FOR FETCH DATA 
                     
                      <?php   $data= getRows('services'); $x=1;?>
                          <?php foreach($data as $row){ ?>
                          <option value="<?php echo $row['ser_id'] ?>"><?php echo $row['serv_name'] ?></option>
                      <?php $x++;}?>
                     
                  </select>

                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
              </div>

              <div class="col-md-6 text-white">

                    <label for="validationCustom04" class="form-label">Choose City</label>
                    <select class="form-select" name="city" required>
                      <option selected disabled value="">Choose...</option>
                      
                      //THIS FUNCTION FORM PAGE Function/db.php  FOR FETCH DATA 

                      <?php   $data= getRows('cities'); $x=1;?>
                        <?php foreach($data as $row){ ?>
                            <option value="<?php echo $row['city_id'] ?>"><?php echo $row['city_name']?></option>
                        <?php $x++;}?>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
              </div>

              <div class="col-md-4 text-white">
                  <label for="validationCustom01" class="form-label">Type Your Name *</label>
                  <input type="text"   class="form-control" name="name"  required>
                  <div class="valid-feedback">
                    Please Inter Your Name!
                  </div>
              </div>
            
              <div class="col-md-4 text-white">
                  <label for="validationCustom02" class="form-label">Type Your Mobile</label>
                  <input type="phone" class="form-control" name="mobile" >
                  <div class="valid-feedback">
                    Looks good!
                  </div>
              </div>

              <div class="col-md-4 text-white ">
                  <label for="validationCustom02" class="form-label">Type Your Email *</label>
                  <input type="email" class="form-control" name="email"  required>
                  <div class="valid-feedback">
                  Please Inter Your Email!
                  </div>
              </div>

              <div class="mb-3 text-white ">
                  <label for="validationTextarea" class="form-label">Notes</label>
                  <textarea class="form-control " name="notes" placeholder="Write Your Notes" required></textarea>
                  <div class="invalid-feedback">
                    Please enter a message in the textarea.
                  </div>
              </div>

              <div class="col-12">
                <button class="btn btn-info" type="submit"  name="submit"> Save </button>
              </div>

          </form>

      </div>
    
 

        <!-- CALL FEILDS JS && JQUARY && POPOER--> 

        <script src="<?php echo ASSETS ;?>/js/bootstrap.min.js"></script>
        <script scr="<?php echo ASSETS ;?>/js/jquery-3.6.0.min.js"></script>
        <script scr="<?php echo ASSETS ;?>/js/poper.3.4.1.min.js"></script>
        
        


</body>

</html>



<?php require_once BLA .'inc/footer.php'; ?>
