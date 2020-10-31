<?php
    include_once("config.php");
    $id = $_GET['id'];

    
    if(isset($_POST['update']))
    {   
        
        $id = $_POST['id'];
        $name= $_POST['name'];
        $jenkel=$_POST['jenkel'];
        $no_telp = $_POST['no_telp'];

        

        $result = mysqli_query($mysqli, "UPDATE writer_tb SET name='$name',jenkel='$jenkel',no_telp='$no_telp' WHERE id=$id");
        header("Location: index.php");

        
    }
    ?>

    <?php

    $result = mysqli_query($mysqli, "SELECT * FROM writer_tb WHERE id=$id");

    while($data = mysqli_fetch_array( $result))
    {
        $name = $data['name'];
        $jenkel = $data['jenkel'];
        $no_telp = $data['no_telp'];
       
    }
?>

<div class="container">
    <h1>Edit</h1>

    <form action="edit-writer.php" method="post">
        <div class="form-group">
            <label for="name"> Nama : </label>
            <input type="text" 
                    class="form-control" 
                    id="name"
                    name="name" 
                    placeholder="Name Penulis"
                    value="<?php echo $name ?>"
                    required>
        </div>




        <div class="form-group">
            <label for="jenkel">Jenis Kelamin : </label>
            <select class="form-control" id="jenkel" name="jenkel" required>
                <option value="">-- Jenis Kelamin --</option>
                <option value="pria" <?php echo $jenkel == 'pria' ? 'selected': ''?>>Pria</option>
                <option value="wanita" <?php echo $jenkel == 'wanita' ? 'selected': ''?>>Wanita</option>
            </select>
        </div>


        <div class="form-group">
            <label for="no_telp"> No telpon : </label>
            <input type="text" 
                    class="form-control" 
                    id="name"
                    name="no_telp" 
                    placeholder="Nomor Telepon"
                    value="<?php echo $no_telp ?>"
                    required>
        </div>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>



        <button class="btn btn-primary" name="update">Submit</button>
        <a href="index.php?page=category" class="btn btn-default">Cancel</a>

    </form>
</div>