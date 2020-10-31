<?php
    include_once("config.php");
    $id = $_GET['id'];

    if(isset($_POST['update']))
    {   
        $id = $_POST['id'];
        $name=$_POST['name'];

        $result = mysqli_query($mysqli, "UPDATE category_tb SET name='$name' WHERE id=$id");
        
        header("Location: index.php");
    }
    ?>

    <?php

    $result = mysqli_query($mysqli, "SELECT * FROM category_tb WHERE id=$id");

    while($data = mysqli_fetch_array( $result))
    {
        $name = $data['name'];
       
    }
?>

<div class="container">
    <h1>Edit</h1>

    <form action="edit-category.php" method="post">
        <div class="form-group">
            <label for="name">Category name : </label>
            <input type="text" 
                    class="form-control" 
                    id="name"
                    name="name" 
                    placeholder="Name Book"
                    value="<?php echo $name ?>"
                    required>
        </div>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>



        <button class="btn btn-primary" name="update">Submit</button>
        <a href="index.php?page=category" class="btn btn-default">Cancel</a>

    </form>
</div>