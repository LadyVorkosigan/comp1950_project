<!DOCTYPE html>
<!--
   Authors: Cindy, Zhaleh , Yuliia
   Date: 11/25/2018
   Project: Comp 1950, Web Development   
   Page: Homepage and Course Outcomes
-->
<html lang="en">

<head>
    <title>COMP1950 Web Dev 2 : Lecture 1</title>
    <meta charset="utf-8">
    <meta name="keywords" content="comp,1950,comp1950,web development and design 2" />
    <meta name="school" content="School of Computing and Academic Studies" />
    <meta name="description" content="This hands-on course follows on from COMP 1850 Applied Web Development Level 1. Students who already understand HTML and CSS will explore web development in more depth with new topics and techniques. Participants will gain a deeper understanding of the latest technologies including HTML5 and CSS3 for developing web sites and applications. There is a focus on responsive design and mobile presentation through the use of Media Queries. Adding behavior to web sites using JavaScript frameworks such as jQuery is introduced. Labs and exercises focus on industry standard web development methodology. Students gain experience creating templates for content management systems and presentation. Additional topics will include: leveraging Server Side Includes (SSI) for re-usable code, source control for managing your code, and web-based fonts for professional typography. COMP 1950 is a required course for the BCIT Computing Advanced Web Technologies associate certificates in Applied Web Development, AWD and Web and Mobile Application Development, WMA, as well as an elective in the CST Diploma. COMP 1950 and COMP 2015 are also the prerequisites for COMP 2052 Android and Mobile Application Development Tools. By the end of this course successful students will be able to build dynamic and semantically marked-up content providing Search Engine Optimized (SEO) pages." />
    <meta name="subject" content="Computer Systems" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style_with_normalize.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/project_styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
   <a href="javascript:" id="return-to-top"><i class="fa fa-angle-double-up arrow"></i></a>
   <?php
   //include the header
   require_once("includes/header.php");
   //include the navigation
   $pageId = "Lecture1";
   require_once("includes/navigation.php");
   
   ?>
    <main class="container-fluid text-center">
        <div class="row content">
            <article class="col-sm-9 text-left article">
                <section class="well">
                    <h2 class="popstyle">Lecture 1: Tools and Standards</h2>
                </section>
                <section class="well" id="sectionlist">
                    <h3>Agenda</h3>
                    <ul>
                        <li><a href="#intro">Introductions</a></li>
                        <li><a href="#orient">Orientation</a></li>
                        <li><a href="#tools">Web Development Tools</a></li>
                        <li><a href="#dev">Standards Based Development</a></li>
                        <li><a href="#todo">To Do</a></li>
                    </ul>
                </section>
                <section class="well">
                    <h3>Course Overview</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
                    <br />
                    <span class="doNotPrint"> <a href="#myNavbar">back to top</a></span>
                </section>
                <section class="well">
                    <h3 id="intro">Introductions</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <br />
                    <span class="doNotPrint"> <a href="#myNavbar">back to top</a></span>
                </section>
                <section class="well">
                    <h3 id="orient">Orientation</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <br />
                    <span class="doNotPrint"> <a href="#myNavbar">back to top</a></span>
                </section>
                <section class="well">
                    <h3 id="tools">Web Development Tools</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <br />
                    <span class="doNotPrint"> <a href="#myNavbar">back to top</a></span>
                </section>
                <section class="well">
                    <h3 id="dev">Standards Based Development</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <br />
                    <span class="doNotPrint"> <a href="#myNavbar">back to top</a></span>
                </section>
                <section class="well" id="sectionlist">
                    <h3 id="todo">To Do</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetuer.</li>
                        <li>Aenean commodo ligula eget dolor.</li>
                        <li>Aenean massa cum sociis natoque penatibus.</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <br />
                    <span class="doNotPrint"> <a href="#myNavbar">back to top</a></span>
                </section>
            </article>
            <nav class="col-sm-2 sidenav">
                <section class="well">
                    <h4>COMP1950 Classes:</h4>
                    <ul>
                        <li><a href="https://bcitcomp.ca/tuesday/">Tuesday</a></li>
                        <li><a href="https://bcitcomp.ca/thursday/">Thursday</a></li>
                        <li><a href="https://bcitcomp.ca/sixweek/#">Six Week</a></li>
                    </ul>
                </section>
            </nav>
            <nav class="col-sm-2 sidenav">
                <section class="well">
                    <h4>BCIT Links:</h4>
                    <ul>
                        <li><a href="https://www.bcit.ca/">BCIT</a></li>
                        <li><a href="https://my.bcit.ca/cp/home/displaylogin">myBCIT</a></li>
                        <li><a href="https://id.bcit.ca/my.policy">D2L</a></li>
                    </ul>
                </section>
            </nav>
            <nav class="col-sm-2 sidenav">
                <section class="well">
                    <h4>Useful Links:</h4>
                    <ul>
                        <li><a href="https://validator.w3.org/">HTML Validator</a></li>
                        <li><a href="http://jigsaw.w3.org/css-validator/">CSS Validator</a></li>
                    </ul>
                </section>
            </nav>
            <nav class="col-sm-2 sidenav">
                <section class="well">
                    <h4>Contact your Instructors:</h4>
                    <p><a href="mailto:jeffrey_parker@bcit.ca">Jeff Parker</a>
                        <br/><span class="email">(jeffrey_parker@bcit.ca)</span></p>
                    <p><a href="mailto:michael_whyte@bcit.ca">Michael Whyte</a> <span class="email">(michael_whyte@bcit.ca)</span></p>
                </section>
            </nav>
        </div>
    </main>
   <?php
	//include the footer
	require_once("includes/footer.php");
	?>
   <script>$(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });</script>
</body>

</html>