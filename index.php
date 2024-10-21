<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share your Game</title>
    <style>
        .parent{
            background: skyblue;
            width: 30%;
            margin: auto;
        }
        a{
            text-decoration: none;
            color: black;
        }
        #header{
            text-align: center;
        }
        a:hover{
            background: gray;
            width: 30%;
        }
    </style>

</head>
<body>
    <h1 align="center" class="parent"><a href="sharegame.php">Share your Game</a></h1>
</body>
</html>


<?php
 
 $Read = fopen("comments.txt", "r+t");
 echo "<h1 id=header>Games Shared by the commnunity:</h1><hr>".fread($Read, 1024);
 fclose($Read);
 ?>