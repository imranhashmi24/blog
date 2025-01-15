
<div class="card">
    <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center"> 
        <h6>Manage Brand</h6>
        <a href="addbrand.php" class="btn btn-success">Add Brand</a>
    </div>



<?php

include "connection.php";

if($conn->connect_error){
    die("Failed" .  $conn->connect_error);
}

$result = $conn->query("select * from brand"); 

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    // Prepare the SQL query for deletion
    $sql = "DELETE FROM `brand` WHERE `id` = $id";

    // Execute the query
    $delete = $conn->query($sql);

    if ($delete) {
        echo "Delete successfully.";
    } else {
        echo "Something went wrong.";
    }
}

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
                            <form action="" method="get" style="display:inline-block;">
                             <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                             <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                         </form>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


