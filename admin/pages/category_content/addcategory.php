<div class="card">
    <div class="card-header bg-primary text-white text-center d-flex justify-content-between align-items-center">
        <h6>Add Category</h6>
        <a href="categorylist.php" class="btn btn-success">Category List</a>
    </div>

    <div class="card-body">
        <form action="action.php" method="post">
            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" name="category_name" class="form-control" placeholder="Category Name">
            </div>
            <div class="form-group">
                <label for="category_slug">Category Slug</label>
                <input type="text" name="category_slug" class="form-control" placeholder="Category Slug">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
</div>