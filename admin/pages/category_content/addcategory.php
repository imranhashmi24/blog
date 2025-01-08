<div class="card">
    <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center">
        <h6>Add Category</h6>
        <a href="categorylist.php" class="btn btn-success">Category List</a>
    </div>


 <?php

include "connection.php";
?>

    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" name="category_name" class="form-control" placeholder="Category Name">
            </div>
            <div class="form-group">
                <label for="category_slug">Category Slug</label>
                <input type="text" name="category_slug" class="form-control" placeholder="Category Slug">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Save">
            </div>
        </form>



        <?php 

            if(isset($_POST['submit']))
            {
                $name = $_POST['category_name'];
                $slug = $_POST['category_slug'];

                // validation


                $sql = "insert into category(name,slug) value('$name','$slug')";

                if($conn->query($sql))
                {
                    echo  "Successfully Data Submited";
                }
                else{
                    echo "Failed";
                }
            }
             

        ?>
    </div>
</div>