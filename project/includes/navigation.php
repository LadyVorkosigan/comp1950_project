<?php
if (!isset($pageId)){
    $pageId = "Project1";
}
?>
<nav class="navbar navbar-inverse" id="headnav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li <?php echo ($pageId === "Project1")? "class=\"active\"" : "" ?>><a href="project1.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lectures <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li <?php echo ($pageId === "Lecture1")? "class=\"active\"" : "" ?>><a href="lecture1.php">Lecture 1</a></li>
                                <li><a href="#">Lecture 2</a></li>
                                <li><a href="#">Lecture 3</a></li>
                                <li><a href="#">Lecture 5</a></li>
                                <li><a href="#">Lecture 5</a></li>
                                <li><a href="#">Lecture 6</a></li>
                                <li><a href="#">Lecture 7</a></li>
                                <li><a href="#">Lecture 8</a></li>
                                <li><a href="#">Lecture 9</a></li>
                                <li><a href="#">Lecture 10</a></li>
                            </ul>
                        </li>
                        <li <?php echo ($pageId === "Quizpages")? "class=\"active\"" : "" ?>><a href="quiz_page.php">Quizzes</a></li>
                        <li><a href="https://bcitcomp.ca/1950/resources/">Resources</a></li>
                        <li><a href="https://bcitcomp.ca/1950/about/">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>