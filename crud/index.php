<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <style>
        a:hover{
            text-decoration: none !important;
        }
        .active-menu{
            color: blue !important;
        }
        
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header class="container  justify-content-between mb-3">
      <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
        <a class="navbar-brand" >Dumb Library</a>
        <ul class="navbar-nav ">
        <li class="nav-item" >
                <a 
                    class="nav-link"href="index.php?page=book">Book</a>
            </li>

            <li class="nav-item" >
                <a 
                    class="nav-link"href="index.php?page=writer">Writer</a>
            </li>

            <li class="nav-item">
                <a 
                    class="nav-link"href="index.php?page=category">Category</a>
            </li>
        </ul>
        
        
        </nav>
    </header>
    <?php
        
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
            switch($page) {
                case 'home':
                    include "index.php";
                    break;
                case 'book':
                    include "book.php";
                    break;
                case 'add-book':
                    include "add-book.php";
                    break;
                case 'edit-book':
                include "edit-book.php";
                break;
                case 'writer':
                    include "writer.php";
                    break;
                case 'add-writer':
                    include "add-writer.php";
                break;
                case 'edit-writer':
                    include "edit-writer.php";
                break;
                case 'category':
                    include "category.php";
                    break;
                case 'add-category':
                    include "add-category.php";
                    break;
                case 'edit-category':
                        include "edit-category.php";
                        break;
                default: 
                    echo"<center>Maaf, Halaman tidak Ditemukan...</center>";
                break;
            }
        }else{
            include "home.php";
        }
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>