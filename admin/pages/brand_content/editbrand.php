<div class="card">
    <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center">
        <h6>Edit Brand</h6>
        <a href="categorylist.php" class="btn btn-success">Brand List</a>
    </div>


    <?php

    include "connection.php";

    if ($conn->connect_error) {
        die("Failed" . $conn->connect_error);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
    
        // Sanitize the ID to prevent SQL injection (assuming it's an integer)
        $id = (int)$id;
    
        // Prepare the SQL query to select the category based on the id
        $sql = "SELECT * FROM `brand` WHERE `id` = $id";
    
        // Execute the query
        $category = $conn->query($sql);
    
        // Check if the category exists
        if ($brand->num_rows > 0) {
            // Fetch the category data
            $row = $brand->fetch_assoc();
            
        } else {
            echo "brand not found.";
        }
    }

    ?>

    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="brand_name">Brand Name</label>
                <input type="hidden" name="brand_id" class="form-control" value="<?php echo $row['id'] ?>">
                <input type="text" name="brand_name" class="form-control" value="<?php echo $row['name'] ?>">
            </div>
            <div class="form-group">
                <label for="brand_slug">Brand Slug</label>
                <input type="text" name="brand_slug" class="form-control" value="<?php echo $row['slug'] ?>" placeholder="brand Slug">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </div>
        </form>



        <?php

        if (isset($_POST['submit'])) {
            $name = $_POST['brand_name'];
            $slug = $_POST['brand_slug'];
            $id = $_POST['brand_id'];


            $sql = "UPDATE `brand` SET `name` = '$name', `slug` = '$slug' WHERE `id` = $id";

            if ($conn->query($sql)) {
                echo  "Successfully Data Update";

                header("Location: brandlist.php");
            } else {
                echo "Failed";
            }
        }


        ?>
    </div>
</div>