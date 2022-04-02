<?php require "../../config.php";?>

<?php require BLA.'inc/header.php'; ?>

<?php require BL.'function/validate.php'; ?>

<div class="col-sm-12">
    <h3 class="text-center p-3 bg-primary text-white ">View All Admins </h3>
    <table class=" table table-dark table-bordered">
        <thead>
            <tr class="text-center">
                <th class="col">#</th>
                <th class="col"> Name </th>
                <th class="col"> Email</th>
                <th class="col">Password</th>
                <th class="col"> Type</th>
                <th class="col"> Created At</th>
                <th class="col"> Action</th>
            </tr>
        </thead>
        <tbody>

         
        <?php $Search=@$_GET['search'];?>

         <?php   $data=Sreach('admins','admin_name',$Search); $x=1;?>
         <?php foreach($data as $row){ ?>
    <tr class="text-center">
        <td scope="row" ><?php echo $x; ?></td>
        <td class="text-center"> <?php echo $row['admin_name']?> </td>
        <td class="text-center"> <?php echo $row['admin_email']?> </td>
        <td class="text-center"> <?php echo $row['admin_password']?> </td>
        <td class="text-center"> <?php echo $row['admin_type']?> </td>
        <td class="text-center"> <?php echo $row['admin_created_at']?> </td>



        <td class="text-center">
           
            <a href="<?php echo BURLA ."admins/delet.php?id=". $row['admin_id']; ?>" class="btn btn-danger delete" data.field="admin_id" data_id="<?php echo $row['admin_id']; ?>" data-table="admins">Delete</a>
   </td>
   
   </tr>
   <?php $x++;}?>
        </tbody>
    </table>
</div>

<?php require BLA.'inc/footer.php'; ?>