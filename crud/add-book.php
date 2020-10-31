<div class="container">
    <h1>Book Form</h1>
    <form action="add-book.php" method="post"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name Book : </label>
            <input type="text" 
                    class="form-control" 
                    id="name"
                    name="name" 
                    placeholder="Name Book"
                    required>
        </div>
        <div class="form-group">
            <label for="category">Category : </label>
            <select class="form-control" id="category" name="category" required>
                <option >--Kategori--</option>
               <?php
                include_once("config.php");
                
                $result = mysqli_query($mysqli, "SELECT * FROM category_tb ");
                while($data = mysqli_fetch_array($result)) {  
                    echo '<option value="'.$data['id'] .'">'. $data['name'] . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="penulis">Penulis : </label>
            <select class="form-control" id="penulis" name="penulis" required>
                <option >--Penulis--</option>
                <?php
                include_once("config.php");
                
                $result = mysqli_query($mysqli, "SELECT * FROM writer_tb ");
                
                while($data = mysqli_fetch_array($result)) {  
                    echo '<option value="'.$data['id'] .'">'. $data['name'] . '</option>';
                }
                ?>
            </select>
        </div>


        <div class="form-group">
            <label for="date">Date and time :</label>
            <input class="form-control" 
                  type="date" 
                  value="2011-08-19T13:45:00" 
                  id="date"
                  name="date"
                  value=""
                  required>
        </div>

        <!-- <label for="image">image : </label>
        <div class="custom-file">
            
            <input type="file" name="fileToUpload" class="custom-file-input" id="image" required>
            <label class="custom-file-label" for="image">Choose file...</label>

            
        </div> -->
        <input type="file" name="image">

        <button class="btn btn-primary" name="tambah">Submit</button>
        <a href="index.php?page=book" class="btn btn-default">Cancel</a>
        </form>

        <?php

        if(isset($_POST['tambah'])) {
                
            $name = $_POST['name'];
            $category = $_POST['category'];
            $penulis = $_POST['penulis'];
            $date = $_POST['date'];
            
            $image 		= addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name	= addslashes($_FILES['image']['name']);
            $image_size	= getimagesize($_FILES['image']['tmp_name']);
            var_dump($date );
            
            include_once("config.php");


            $result = mysqli_query($mysqli, 
                    "INSERT INTO book_tb(name,category_id,writer_id, publication_year, img) 
                        VALUES('$name','$category','$penulis', '$date', '$image')");
            
            
            

        
           
        }
        

        ?>
</div>