
<div class="card">
    <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center"> 
        <h6>Manage Brand</h6>
        <a href="addbrand.php" class="btn btn-success">Add Brand</a>
    </div>



<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "blog_project";


$conn = new mysqli($server,$username,$password,$database);

if($conn->connect_error){
    die("Failed" .  $conn->connect_error);
}

$result = $conn->query("select * from brand"); 



?>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Brand Name</th>
                        <th>Brand Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  while($row= $result->fetch_assoc()) {  ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['slug'] ?></td>                        
                        <td>
                            <a href="editbrand.php" class="btn btn-primary btn-sm">Edit</a>
                            <a href="brandcategory.php" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>