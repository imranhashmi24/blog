<div class="card">
    <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center">
        <h6>Add Brand</h6>
        <a href="brandlist.php" class="btn btn-success">Brand List</a>
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
 
?>

    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="brand_name">brand Name</label>
                <input type="text" name="brand_name" class="form-control" placeholder="Brand Name">
            </div>
            <div class="form-group">
                <label for="brand_slug">Brand Slug</label>
                <input type="text" name="brand_slug" class="form-control" placeholder="Brand Slug">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Save">
            </div>
        </form>



        <?php 

            if(isset($_POST['submit']))
            {
                $name = $_POST['brand_name'];
                $slug = $_POST['brand_slug'];


                $sql = "insert into brand(name,slug) value('$name','$slug')";

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