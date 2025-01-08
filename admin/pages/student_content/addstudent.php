<div class="card">
    <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center">
        <h6>Add Student</h6>
        <a href="studentlist.php" class="btn btn-success">Student List</a>
    </div>


    <?php
    
    $server   = "localhost";
    $username = "root";
    $password = "";
    $database  = "blog_project";
    
    $conn = new mysqli($server,$username,$password,$database);
    
    if($conn->connect_error){
        die("Faild" . $conn->connect_error);
    }

    $result = $conn->query("select * from students"); 
    ?>

    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="student_name">Student Name</label>
                <input type="text" name="student_name" class="form-control" placeholder="Student Name">
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" name="class" class="form-control" placeholder=" class">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Save">
            </div>
        </form>

        <?php 

            if(isset($_POST['submit']))
            {
                $name = $_POST['student_name'];
                $class = $_POST['class'];


                $sql = "insert into students (name,class) value('$name','$class')";

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