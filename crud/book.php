
<?php 
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT book_tb.name as title, book_tb.img as book_image, c.name as cat_name ,  w.name as penulis_name   FROM book_tb INNER JOIN 
                                    category_tb c ON c.id = book_tb.category_id
                                    INNER JOIN 
                                    writer_tb w ON w.id = book_tb.writer_id");

?>
<div class="container">
    <h1>Book</h1>

    
    <a class="btn btn-primary float-right "
            href="index.php?page=add-book" 
            
             rel="noopener noreferrer">Add Book</a>
    
    <div class="row " style="margin-top : 90px">
    
    <?php
    while($data = mysqli_fetch_array($result)) {  
       
        
        echo '<div class="col-md-4" >';

        echo '<div class="card" style="width: 18rem;">';
        echo '<img class="card-img-top" src="data:image/png;base64,'.base64_encode($data['book_image']).'"   alt="Card image cap">';
        echo '<div class="card-body">';
        echo '  <h5 class="card-title">'.$data['title'] .'</h5>';
        echo '  <p class="card-text">'. $data['penulis_name'] .'</p>';
        echo "  <a class='btn   btn-primary' href='index.php?page=edit-book&id=$data[id]'>EDIT
      </a> ";
        echo '</div>';
        echo '</div>';
         echo ' </div>';
    }

   

    ?>
         </div>
        

</div>