<!DOCTYPE html>
<!--
   Authors: Cindy, Zhaleh , Yuliia
   Date: 11/25/2018
   Project: Comp 1950, Web Development   
   Page: Quiz 1 template 
-->
<html lang="en">

    <head>
        <title>COMP1950 Web Dev 2 :Quiz 1</title>
        <meta charset="utf-8">
        <meta name="keywords" content="comp,1950,comp1950,web development and design 2" />
        <meta name="school" content="School of Computing and Academic Studies" />
        <meta name="description" content="This hands-on course follows on from COMP 1850 Applied Web Development Level 1. Students who already understand HTML and CSS will explore web development in more depth with new topics and techniques. Participants will gain a deeper understanding of the latest technologies including HTML5 and CSS3 for developing web sites and applications. There is a focus on responsive design and mobile presentation through the use of Media Queries. Adding behavior to web sites using JavaScript frameworks such as jQuery is introduced. Labs and exercises focus on industry standard web development methodology. Students gain experience creating templates for content management systems and presentation. Additional topics will include: leveraging Server Side Includes (SSI) for re-usable code, source control for managing your code, and web-based fonts for professional typography. COMP 1950 is a required course for the BCIT Computing Advanced Web Technologies associate certificates in Applied Web Development, AWD and Web and Mobile Application Development, WMA, as well as an elective in the CST Diploma. COMP 1950 and COMP 2015 are also the prerequisites for COMP 2052 Android and Mobile Application Development Tools. By the end of this course successful students will be able to build dynamic and semantically marked-up content providing Search Engine Optimized (SEO) pages." />
        <meta name="subject" content="Computer Systems" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style_with_normalize.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/project_styles.css">
        <link rel="stylesheet" href="css/form_styles.css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
    
    </head>

    <body>
            <a href="javascript:" id="return-to-top"><i class="fa fa-angle-double-up arrow"></i></a>
            <?php
   //include the header
   require_once("includes/header.php");
   //include the navigation
            $pageId = "Quizpages";
   require_once("includes/navigation.php");
    ?>
        <main>
            <h1>Quiz 1</h1>
            <form class="well well-sm" action="/action_page.php">
                <div class="form-inline" id="studId">
                    <label for="studentId">Student ID:</label>
                    <input type="text" class="form-control" id="studentId" placeholder="A00123456">
                </div>
                <div class="form-group">
                    <label class="question"><span>Question 1</span><span>3 point</span></label>
                    <label for="exampleFormControlTextarea1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium?</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label class="question"><span>Question 2</span><span>1 point</span></label>
                    <label for="exampleFormControlTextarea1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium?</label>
                    <br />
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Lorem ipsum dolor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Lorem ipsum dolor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Lorem ipsum dolor
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="question"><span>Question 3</span><span>3 point</span></label>
                    <label for="exampleFormControlTextarea1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium?</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label class="question"><span>Question 4</span><span>1 point</span></label>
                    <label for="exampleFormControlTextarea1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium?</label>
                    <br />
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            True
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            False
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="question"><span>Question 5</span><span>2 point</span></label>
                    <label for="exampleFormControlTextarea1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium?</label>
                    <br />
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Lorem ipsum dolor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Lorem ipsum dolor
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Lorem ipsum dolor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Lorem ipsum dolor
                        </label>
                    </div>
                </div>
                
            </form><button id="notPrinted" type="submit" class="btn btn-primary" >Submit</button>
            <br />
            <div class="text-center" id="doNotPrint"> <a href="#myNavbar">back to top</a></div> <br />
        </main>
        <?php
	//include the footer
	require_once("includes/footer.php");
	?>


        <script>
        $('#notPrinted').click(function(){
            swal({
  title: 'Do you want to submit quiz?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: 'grey',
  confirmButtonText: 'Yes, send it!'
}).then((result) => {
  if (result.value) {
    swal(
      'SENT!',
      'Your anweres were submitted.',
      'success',
      'https://unsplash.it/400/200'
    )


setTimeout(function() { 
    window.location = "quiz_page_after.php";
  //your code to be executed after 1 second
}, 1500);
   

  }
})
        });
        
        </script>

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