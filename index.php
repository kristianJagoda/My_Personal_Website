<!DOCTYPE html>
<html>

<head>
    <title>Krystian Jagoda</title>
    <meta charset="utf-8">
    <meta name="description" content="Personal Website of the junior Front-End Web Developer Krystian Jagoda
    containing his portfolio">
        <meta name="keywords" content="Junior Front-End Web Developer">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container header_flex">
            <div class="hamburger_menu">
                <input type="checkbox" id="change-hamburguer">
                <a class="hamburguer" href="#">
                    <span></span>
                    <label for="change-hamburguer"></label>
                </a>


                <ul class="menu">
                    <li><a href="#about_me" class="first">ABOUT ME</a></li>
                    <li><a href="#portfolio">PORTFOLIO</a></li>
                    <li><a href="#skills">SKILLS</a></li>
                    <li><a href="#contact" class="last">CONTACT</a></li>
                </ul>
            </div>

            <!---MAIN SECTION --->
            <section id="home" class="main">

                <div class="main_heading_part1">
                    <h1>Krystian Jagoda</h1>
                </div>
                <div class="main_heading_part2">
                    <h2>Junior Front End Web Developer</h2>
                </div>

            </section>

        </div>
    </header>

    <!--ABOUT ME SECTION-->

    <section id="about_me" class="about_me">
        <div class="container">

            <h2>ABOUT ME</h2>
            <hr class="underline">



            <article>
                <div class="about_me_part1">
                    <div class="about_me_div_my_picture">

                        <div class="about_me_picture">

                        </div>
                    </div>
                </div>
                <div class="about_me_part2">
                    <p>
                        Hi! I am Kristian Jagoda and am a junior Front-End Web developer.
                    </p>
                    <p>
                        I graduated in law from the University of Greenwich in 2011 and
                        I practiced law for over 4 years but realised that it was not for me. I decided to try something different.
                    </p>
                    <p>
                        I made the decision to quit my job and enrol on a full-time course.
                        I completed a 7-week course in front-end web development
                        with <strong><a href="http://coderslab.pl/en/">Coders' Lab</a></strong> in Wroclaw, Poland.
                    </p>
                    <p>
                        I have learnt to build solid web foundation by using HTML5, styling it
                        with CSS3 and adding behaviour with JavaScript (and its library – jQuery).
                        I have learned technologies such as Sass and GULP which help to build websites
                        faster and more efficiently.
                        I have also learnt basics of PHP to create my first website in WordPress.
                    </p>
                    <p>
                        Coding has become my passion. I understand that my skills might be limited
                        but I am eager to learn and develop them further and my tutors have commended
                        me on how quickly I have learnt the skills mentioned above and I code as often as I can.
                    </p>
                    <p>
                        You can download my <strong><a href="CV/KrystianJagodaCV.pdf">CV</a></strong> or visit my profiles at <strong><a href="https://www.linkedin.com/in/krystian-jagoda-97473895/">LinkedIn</a></strong>
                        and <strong><a href="https://github.com/kristianJagoda">GitHub</a></strong>.
                    </p>

                </div>
            </article>
            <button class="button"><img src="images/arrow_down.svg" alt="Arrow down"><a href="#top">Back to Main Page</a></button>
        </div>
    </section>

    <!--PORTFOLIO SECTION-->

    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2>Portfolio</h2>
            <hr class="underline">


            <div class="portfolio_wrapper">


                <div class="portfolio_elements">
                    <div class="portfolio_hover">

                        <div class="portfolio_overlay">
                            <h2>Sit On Chair</h2>
                            <p>
                                <a href="https://github.com/kristianJagoda/Sit-On-Chair/tree/master">See Code</a>
                            </p>
                            <p>
                                <a href="https://kristianjagoda.github.io/Sit-On-Chair/">See Preview</a>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="portfolio_elements">
                    <div class="portfolio_hover">

                        <div class="portfolio_overlay">
                            <h2>First page</h2>
                            <p>
                                <a href="https://github.com/kristianJagoda/First_Website">See Code</a>
                            </p>
                            <p>
                                <a href="https://kristianjagoda.github.io/First_Website/">See Preview</a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <button class="button"><img src="images/arrow_down.svg" alt="Arrow down"><a href="#top">Back to Main Page</a></button>
        </div>
    </section>

    <!--SECTION SKILLS -->
    <section id="skills" class="skills">
        <div class="container">
            <h2>Skills</h2>
            <hr class="underline">

            <div class="skill_flex">

                <img src="images/HTML5_logo.svg" alt="CSS3 Logo" title="Picture of the HTML5 Logo">
                <img src="images/CSS3_logo.svg" alt="CSS3 Logo" title="Picture of the CSS3 Logo">
                <img src="images/JavaScript_logo.svg" alt="JavaScript Logo" title="Picture of the JavaScript Logo">
                <img src="images/JQuery_logo.svg" class="jquery" alt="JQuery Logo" title="Picture of the JQuery Logo">
                <img src="images/Sass_logo.svg" alt="Sass Logo" title="Picture of the Sass Logo">
                <img src="images/Gulp_logo.svg" alt="Gulp Logo" title="Picture of the Gulp Logo">

            </div>
            <button class="button"><img src="images/arrow_down.svg" alt="Arrow down"><a href="#top">Back to Main Page</a></button>
        </div>

    </section>

    <!-- CONTACT FORM -->
    <section id="contact" class="form">
        <div class="container">
            <h2>Contact</h2>
            <hr class="underline">
            <div class="success"></div>
            <div class="error"></div>

            <div class="form-main">
                <div class="form-div">
                    <form class="form" class="form1">

                        <label class="name">
                            <input name="name" type="text" class="name_input feedback-input tooltip" placeholder="Name" id="name" title="Your name cannot be shorter than 5 characters.">
                        </label>

                        <label class="email">
                            <input name="email" type="text" class="email_input feedback-input tooltip" id="email" placeholder="Email" title="Your email address must include '@' and be at least 5 characters long.">
                        </label>

                        <label class="text">
                            <textarea name="text" class="text_textarea feedback-input tooltip" id="comment" placeholder="Message" title="Enter at least 5 characters."></textarea>
                        </label>


                        <div class="submit">
                            <input type="submit" value="SEND" class="button-blue" />

                        </div>
                    </form>
                </div>
            </div>

            <button class="button"><img src="images/arrow_down.svg" alt="Arrow down"><a href="#top">Back to Main Page</a></button>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer_flex">
                <div class="footer_part1">
                    <p>Copyright &#169; 2017</p>
                    <p>All Rights Reserved</p>
                </div>

                <div class="footer_part2">
                    <a href="https://www.linkedin.com/in/krystian-jagoda-97473895/"><img src="images/Linkedin_logo.svg" alt="LinkedIn Logo" title="Picture of the LinkedIn Logo"></a>
                    <a href="https://github.com/kristianJagoda"><img src="images/gitHub_logo.svg" alt="GitHub Logo" title="Picture of the GitHub Logo"></a>
                </div>
            </div>

        </div>

    </footer>



    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

    <script src="js/app.js"></script>



</body>

</html>
