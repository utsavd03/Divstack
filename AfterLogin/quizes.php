<?php

    include("users.php");
    $profile=new users;
    $profile->cat_shows();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Quiz</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="../public/css/quiz.css">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>

    <body>

        <div>
            <div class="row">
                <div class="col-lg-12 quizHeadSection" style="background-image: url(../public/images/quiz.jpg);">
                    <br><br><br><br>
                    <h1>Quiz</h1>
                    <p>Test your knowledge by taking the quiz</p>
                </div>
            </div>

            <div class="quizFormSection">
                <form  method="post" action="qus_show.php" class="quiz-form">
                    <select name="cat">
                        <option>select category</option>
                        <?php		  
                            foreach($profile->cat as $category)
                            {  ?>			  			
                                <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
                            <?php   }?>
                    </select><br>
                    <input type="submit" action="submit" class="btn btn-secondary footbtn"></input>
                    <a href="home2.php" style="text-decoration: none; color: #00587a; display: block; padding-top: 10px;">back to home</a>
                </form>
            </div>
        </div>
            
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    </body>
</html>
