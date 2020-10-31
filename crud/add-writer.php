<div class="container">
  
    <form action="add-writer.php" method="post">
        <div class="form-group">
            <label for="name"> Nama : </label>
            <input type="text" 
                    class="form-control" 
                    id="name"
                    name="name" 
                    placeholder="Name Penulis"
                    required>
        </div>

        <div class="form-group">
            <label for="jenkel">Jenis Kelamin : </label>
            <select class="form-control" id="jenkel" name="jenkel" required>
                <option value="">-- Jenis Kelamin --</option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
            </select>
        </div>


        <div class="form-group">
            <label for="no_telp"> No telpon : </label>
            <input type="text" 
                    class="form-control" 
                    id="name"
                    name="no_telp" 
                    placeholder="Name Book"
                    required>
        </div>
        
        <button class="btn btn-primary" name="tambah">Submit</button>
        <a href="index.php?page=category" class="btn btn-default">Cancel</a>

    </form>

    <?php
        if(isset($_POST['tambah'])) {
            
            $name = $_POST['name'];
            $jenkel = $_POST['jenkel'];
            $telp = $_POST['no_telp'];
            
            include_once("config.php");
    
            
            $result = mysqli_query($mysqli, "INSERT INTO writer_tb(name,jenkel,no_telp) VALUES('$name','$jenkel','$telp')");
            
            
            header("Location:index.php?page=writer");

           
        }
        
    
    ?>
</div>