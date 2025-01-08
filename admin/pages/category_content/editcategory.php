<div class="card">
    <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center">
        <h6>Edit Category</h6>
        <a href="categorylist.php" class="btn btn-success">Category List</a>
    </div>


 <?php

    $server   = "localhost";
    $username = "root";
    $password = "";
    $database  = "blog_project";

    $conn = new mysqli($server,$username,$password,$database);

    if($conn->connect_error){
        die("Failed" . $conn->connect_error);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
    
        // Sanitize the ID to prevent SQL injection (assuming it's an integer)
        $id = (int)$id;
    
        // Prepare the SQL query to select the category based on the id
        $sql = "SELECT * FROM `category` WHERE `id` = $id";
    
        // Execute the query
        $category = $conn->query($sql);
    
        // Check if the category exists
        if ($category->num_rows > 0) {
            // Fetch the category data
            $row = $category->fetch_assoc();
            
        } else {
            echo "Category not found.";
        }
    }
?>

    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="hidden" name="category_id" class="form-control" placeholder="category name" value="<?php echo $row['id'] ?>">
                <input type="text" name="category_name" class="form-control" placeholder="category name" value="<?php echo $row['name'] ?>">
            </div>
            <div class="form-group">
                <label for="category_slug">Category Slug</label>
                <input type="text" name="category_slug" class="form-control" value="<?php echo $row['slug'] ?>" placeholder="Category Slug">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Update">
            </div>
        </form>



        <?php 

            if(isset($_POST['submit']))
            {
                $name = $_POST['category_name'];
                $slug = $_POST['category_slug'];
                $id = $_POST['category_id'];


                $sql = "UPDATE `category` SET `name` = '$name', `slug` = '$slug' WHERE `id` = $id";

                if($conn->query($sql))
                {
                    echo  "Successfully Data Update";

                    header("Location: categorylist.php");

                }
                else{
                    echo "Failed";
                }
            }
             

        ?>
    </div>
</div>