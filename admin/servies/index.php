<?php require "../../config.php";?>


<?php require BL.'function/validate.php'; ?>

<?php

if(!isset($_SESSION['admin_email']))
{

header("location:". BURLA .'login.php');

} 

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
   
    <link rel="stylesheet" href="<?php echo ASSETS ;?>/css/bootstrapt.css">
    <link rel="stylesheet" href="<?php echo ASSETS ;?>/css/style.css">
    <title>Dashborad | Home Page</title>
</head>
<body>







<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img  src="<?php echo ASSETS ;?>/images/X.JPG" alt="" style="
    WIDTH: 40PX;
    MARGIN: 5PX;
">
    <!--<a class="navbar-brand" href="#">Logon</a>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BURLA.'index.php';?>">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Cites
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="<?php echo BURLA.'/cities/add.php';?>">Add</a></li>
            <li><a class="dropdown-item" href="<?php echo BURLA.'/cities/index.php';?>">view All</a></li>
            
          </ul>
        </li>

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Servies
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="<?php echo BURLA.'/servies/add.php';?>">Add</a></li>
            <li><a class="dropdown-item" href="<?php echo BURLA.'/servies/index.php';?>">veiw All</a></li>
           </ul>
        </li>

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Order
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="<?php echo BURLA.'/orders/index.php';?>">view All</a></li>
            
          </ul>
        </li>

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="<?php echo BURLA .'admins/add.php'?>">Add </a></li>
            <li><a class="dropdown-item" href="<?php echo BURLA .'admins/index.php'?>">veiw All</a></li>
           
          </ul>
        </li>

        <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo BURLA.'logout.php'?>" style="font-family: initial;margin: 11px 12px;">Logout</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      </ul>
      <form class="d-flex"  action="../servies/index.php" method="Get">
        <input class="form-control me-2" type="search" name="search" placeholder="Write Servie Name" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <div class="container-fluld mt-5 md-5">
      <div class="row">

     

<div class="col-sm-12">
    <h3 class="text-center p-3 bg-primary text-white ">View All Servies </h3>
    <table class=" table table-dark table-bordered">
        <thead>
            <tr class="text-center">
                <th class="col">#</th>
                <th class="col"> Name </th>
                <th class="col"> Action</th>
            </tr>
        </thead>
        <tbody>
          <?php $search=@$_GET['search'];?>    

         <?php   $data= Sreach('services','serv_name ',$search); $x=1;?>
         <?php foreach($data as $row){ ?>
    <tr class="text-center">
        <td scope="row" ><?php echo $x; ?></td>
        <td class="text-center"> <?php echo $row['serv_name']?> </td>
       


        <td class="text-center">
            <a href="<?php echo BURLA ."servies/edit.php?id=". $row['ser_id']; ?>" class="btn btn-info">Edit</a>
            <a href="<?php echo BURLA ."servies/delet.php?id=". $row['ser_id']; ?>" class="btn btn-danger delete" data.field="serv_id" data_id="<?php echo $row['ser_id']; ?>" data-table="servies">Delete</a>
   </td>
   
   
   </tr>
   <?php $x++;}?>
        </tbody>
    </table>
</div>

<?php require BLA.'inc/footer.php'; ?>