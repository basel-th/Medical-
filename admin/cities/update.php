<?php require "../../config.php";?>

<?php require BLA.'inc/header.php'; ?>
<?php require BL.'function/validate.php'; ?>



<?php
if(isset($_POST['submit'])){

    $name_city=$_POST['name'];
    $city_id=$_POST['city_id'];
   
    if(checkEmpty($name_city) && checkless($name_city,3) ) {
    
        global $conn;
        $sql="update cities set city_name ='$name_city' where city_id ='$city_id'" ;
        $result=mysqli_query($conn,$sql);

    
        if($result){
            $success_message = "Updated Success";
         

           echo"<meta  http-equiv='refresh'  content=' 2; url=".BURLA."cities/index.php'/>";
        }    
    else{


        echo" SORY YOU HAVE ERROR";
    }
       
    }
       
           else
    {

       $error_message = "Please Fill All Filds";
    }

    require BL .'function/messages.php';
    }
 

?>

<?php require BLA.'inc/footer.php'; ?> 