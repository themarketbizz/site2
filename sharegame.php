
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share your Game</title>
    <style>
        #url{
            background: tomato;
        }

        form{
           
            margin: auto;
            width: 50%;
            text-align: center;
        }

        div{
            border: solid none;
            background: gray;
            width: 50%;
            margin: auto;
            margin-top: 50px;
            }
        h2{
            text-align: center;
        }

        button{
            height: 30px;
            width: 100px;
            margin-left: 42%;
           }
       
       

    </style>

</head>
<body>
           <h1 align="center">Showcase your Game</h1>
        <div>
        <button><a href="index.php">Home</a></button>

    <form action="" method="POST" class="form">
        <label>Name:<br>
            <input type="text" name="Name" required /></label><br>
            
        <label>Url:<br>
                <textarea name="Url" required></textarea></label><br>

        <label>APK:<br>
                <textarea name="APK" required></textarea></label><br>
                
                <input type="submit" name="Submit" value="Submit"/>
        </form>

        </div>

</body>
</html>

<?php
 if(isset($_POST["Submit"])){
    print "<h2>Your Game has been added!<h2>";

    $Name = $_POST["Name"];
    $Url = $_POST["Url"];
    $APK = $_POST["APK"];
   


    $Old =fopen("comments.txt", "r+t");
    $Old_Comments = fread($Old, 1024);

    //Add new Comment

    $Write = fopen("comments.txt", "w+");

    $String =
        "<div class='comment'><span>".$Name."</span><br>
        <span>".date("Y/m/d")." / ".date("h:i A")."</span><br/>
        <span id=url>Link:".$Url."</span><br>
        <span>APK:".$APK."</span>
        </div>\n".$Old_Comments;
   

    fwrite($Write, $String);
    fclose($Write);
    fclose($Old);
 }   




?>