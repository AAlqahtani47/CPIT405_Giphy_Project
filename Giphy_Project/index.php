<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="./indexCSS.css">
    <title>Giphy Search</title>
</head>

<body>
    <h1>Abdulrahman Alqahtani - 1846618</h1>
    <?php 
    require_once('./db_connection.php');
    require('./display_gifs.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_POST['search_btn'])) {
            TfetchGiphyAPI($_POST["keyword"]); 
        } 

    }
?>

<div id="content">
        <h1>Giphy API Search</h1>
        <form method="post" id="addForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           <input type="text" name="keyword" id="item" placeholder="searching for gifs here :)" />
           <button name="search_btn" id="searchbtn">Search</button>
           </div>
        </form>
</div>
    <div id="searchResults"></div>
</body>
</html>
