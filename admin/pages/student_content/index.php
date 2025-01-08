
<div class="card">
    <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center"> 
        <h6>Manage Students</h6>
        <a href="addstudent.php" class="btn btn-success">Add Student</a>
    </div>



    <?php
    
    $server ="localhost";
    $username = "root";
    $password = "";
    $database = "blog_project";
    
    $conn = new mysqli($server,$username,$password,$database);
    
    if($conn->connect_error){
        die("Failed" . $conn->connect_error);
    }

    $result = $conn->query("select * from students"); 
    
    ?>






    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php  while($row= $result->fetch_assoc()) {  ?>
                    <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['class'] ?></td> 
                     
                        <td>
                            <a href="editstudent.php" class="btn btn-primary btn-sm">Edit</a>
                            <a href="deletestudent.php" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>