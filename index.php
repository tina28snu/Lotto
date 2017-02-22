<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jeux</title>
    <style>
        li {
            list-style-type: none;
            display: inline-block;
            background-color: aquamarine;
            text-align: center;
        }
        a {
            text-decoration: none;
            display: block;
            width: 150px;
            height: 30px;
            padding-top: 8px;
        }
        li:hover {
            background-color: cadetblue;
        }
    </style>
</head>
<body>
    
    <?php
    
    include("./includes/header.php");
    
    include("./includes/nav.php");
    
    
    if(!empty($_GET['page'])) {
            $page = $_GET['page'];
            include($page);
        }
    
    
    include("./includes/footer.php");
    
    ?>
    
</body>
</html>