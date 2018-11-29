<!DOCTYPE html>
<!--
   Authors: Cindy, Zhaleh , Yuliia
   Date: 11/25/2018
   Project: Comp 1950, Web Development   
   Page: Quizzes to describe the topics of each quiz 
-->
<html lang="en">

    <head>
        <title>COMP1950 Web Dev 2 :Quizzes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">
        <link rel="stylesheet" href="css/style_with_normalize.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/project_styles.css">
        <link rel="stylesheet" href="css/quiz_style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
    <?php
   //include the header
   require_once("includes/header.php");
   //include the navigation
   require_once("includes/navigation.php");
    ?>
        <main>
            <h1>Quizes</h1>
            <br>

            <div class="quiz_box ">
                    <i class="far fa-check-circle green"></i>
                    
                <p >Quiz 1  <span class="pending"> Pending . . .</span></p>
                <p class="due">09/21/2018</p>
            </div>
            <div class="content_hide ">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               
            </div>

            <div class="quiz_box  open">
                    <i class="fas fa-lock"></i>
                <p >Quiz 2</p>
                <p class="due">09/30/2018</p>
            </div>
            <div class="content_hide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="quiz_box">
                    <i class="fas fa-lock"></i>
                <p>Quiz 3</p>
                <p class="due">10/07/2018</p>
            </div>
            <div class="content_hide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="quiz_box  open"> <i class="fas fa-lock"></i>
                <p >Quiz 4</p>
                <p class="due">10/14/2018</p>
            </div>
            <div class="content_hide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="quiz_box ">
                <i class="fas fa-lock"></i>
                <p>Quiz 5</p>
                <p class="due">10/22/2018</p>
            </div>
            <div class="content_hide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="quiz_box ">
                <i class="fas fa-lock"></i>
                <p>Quiz 6</p>
                <p class="due">10/29/2018</p>
            </div>
            <div class="content_hide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="quiz_box "> <i class="fas fa-lock"></i>
                <p>Quiz 7</p>
                <p class="due">11/05/2018</p>
            </div>
            <div class="content_hide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </main>
        <?php
	//include the footer
	require_once("includes/footer.php");
	?>
        <script>
            var coll = document.getElementsByClassName("quiz_box");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");

                    var content = this.nextElementSibling;
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                        this.style.borderLeft = "6px solid  #277455";
                        this.style.backgroundColor = "white"

                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                        this.style.borderLeft = "6px solid #19093B";
                        this.style.backgroundColor = "rgba(179, 179, 179, 0.445)";
                    }
                });
            }
        </script>
    </body>
 

</html>