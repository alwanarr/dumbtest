<div class="container">
    <h1>Category Form</h1>

   
    <form action="add-category.php" method="post">
        <div class="form-group">
            <label for="name">Category name : </label>
            <input type="text" 
                    class="form-control" 
                    id="name"
                    name="name" 
                    placeholder="Name Book"
                    required>
        </div>
        
        <button class="btn btn-primary" name="tambah">Submit</button>
        <a href="index.php?page=category" class="btn btn-default">Cancel</a>

    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['tambah'])) {
        
        $name = $_POST['name'];
       

        
        include_once("config.php");

        
        $result = mysqli_query($mysqli, "INSERT INTO category_tb(name) VALUES('$name')");

      
        header("Location:index.php?page=category");
    }
    ?>
</div>