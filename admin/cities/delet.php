<?php require "../../config.php";?>

<?php require BLA.'inc/header.php'; ?>
<?php require BL.'function/validate.php'; ?>



<?php
if(isset($_GET['id']) && is_numeric($_GET['id']) )
{    
    
        $city_id=$_GET['id'];

        global $conn;
        $sql="delete from cities where city_id ='$city_id'" ;
        $result=mysqli_query($conn,$sql);

    
        if($result)
        {
            $success_message = "Deleted Success";
            echo"<meta  http-equiv='refresh'  content=' 2; url=".BURLA."cities/index.php'/>";
        }    
        
        else
        {
        $error_message = "Please Fill All Filds";
        }

    require BL .'function/messages.php';
    }


?>

<?php require BLA.'inc/footer.php'; ?> 