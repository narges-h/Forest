<?php

 if(isset($_POST['add'])){
    $length = 10;
 }
 else{
    $length = 1;
 }






?>
<!DOCTYPE html>
<html>
<head>
    <title>My Simple Blog</title>
    <style>
        body {
            direction: rtl;
        
            font-family: Arial, sans-serif;
        }
        .post {
            
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
            
        }
        .post-title {
            font-size: 20px;
            font-weight: bold;
        }
        .post-content {
            margin-top: 10px;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0px;
            width: 100%;
            height: 13%;
            background-color: rgb(51, 102, 153);
        }
        .a{
            width: 7%;
            height: 60px;
            margin-top: 10px;
            margin-right : 110px;
            border-radius: 5px;
            border-color:white;
        }
        .b{
            width: 80%;
            height: 56px;
            margin-top: 10px;
            direction: ltr;
            border-radius: 5px;
            border-color:white;
            
            
            

        }
    </style>
</head>
<body>
    <h1><center>My Simple Blog</center></h1>

    <?php for($i = 0;$i < $length;$i++){ ?>

    <div class="post">
        <div class="post-title">First Post</div>
        <div class="post-content">
            This is the content of my first blog post.
        </div>
    </div>
    <?php }?>

    <div class="footer">
        <form method="post">
            <input class="a" type="submit" name="add"/>
            <input class="b" type="text"  placeholder="enter your text..." name="txt"/>
        </form>
      </div>
</body>
</html>
