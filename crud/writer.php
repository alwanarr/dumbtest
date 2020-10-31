<?php 
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM writer_tb ");

?>

<div class="container">
    <h1>Writer</h1>

    <a class="btn btn-primary float-right mb-2"
            href="index.php?page=add-writer" 
             rel="noopener noreferrer">Add Writer</a>


    <table class="table ">
    <thead>
    
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
      $no = 1;
      while($data = mysqli_fetch_array($result)) {  
        echo '<tr>';
            echo  '<td>' . $no++ . '</td>';
            echo  '<td>' .$data["name"]. '</td>';
            echo  '<td>' .$data["jenkel"]. '</td>';
            echo "<td>
                      <a class='btn btn-sm  btn-warning' href='index.php?page=edit-writer&id=$data[id]'>
                        <i class='fas fa-pen text-light'></i>
                      </a> 
                      <a class='btn btn-sm btn-danger' href='delete-writer.php?id=$data[id]' ”>
                        <i class='fas fa-trash'></i>
                      </a>
                  </td>
                  ";
        echo  '</tr>';
      }
     ?>
    </tbody>
    </table>
</div>