<?php require "../../config.php";?>

<?php require BLA.'inc/header.php'; ?>
<?php require BL.'function/validate.php'; ?>



<?php
if(isset($_POST['submit']))
{

    $name_serv=$_POST['name'];
    $serv_id=$_POST['serv_id'];
   
    if(checkEmpty($name_serv) && checkless($name_serv,3) )
    
    {
        global $conn;
        $sql="update services set serv_name ='$name_serv' where ser_id ='$serv_id'" ;
        $result=mysqli_query($conn,$sql);

            if($result)
                {
                    $success_message = "Updated Success";
                    echo"<meta  http-equiv='refresh'  content=' 2; url=".BURLA."servies/index.php'/>";
                }    
            else
                {

                $error_message = "Please Fill All Filds";
                }
     
    } 

    else{


        $error_message = "Please Write More Than Three Letters";
        echo"<meta  http-equiv='refresh'  content=' 2; url=".BURLA."servies/index.php'/>";
               


    }
    require BL .'function/messages.php';
}


?>

<?php require BLA.'inc/footer.php'; ?> 