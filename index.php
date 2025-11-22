<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyDevs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.tenor.com%2F5E08lV96ikAAAAAM%2Fsillycat.gif&f=1&nofb=1&ipt=cf506535926397d2a6cdc4b99afe225becc721d70d83e53fd4fadbb40e41de13" type="image/x-icon">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.tenor.com%2F5E08lV96ikAAAAAM%2Fsillycat.gif&f=1&nofb=1&ipt=cf506535926397d2a6cdc4b99afe225becc721d70d83e53fd4fadbb40e41de13" alt="Logo" id="logo-img">
            <span>LazyDevs</span>
        </div>
        <div class="nav-links">
            <a href="form.html" target="_blank"><b>Register Now</b></a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-section">
                <h3 class="section-title">HTML</h3>
                <ul>
                    <li><a href="intro_html.html" class="topic-link" >Introduction</a></li>
                    <li><a href="elements_html.html"topic-link" >Elements</a></li>
                    <li><a href="att_html.html" class="topic-link" >Attributes</a></li>
                    <li><a href="forms.html" class="topic-link">Forms</a></li>
                </ul>
            </div>
            <div class="sidebar-section">
                <h3 class="section-title" data-section="css-section">CSS</h3>
                <ul>
                    <li><a href="intro_css.html" class="topic-link">Introduction</a></li>
                    <li><a href="selector_css.html" class="topic-link">Selectors</a></li>
                    <li><a href="boxmodel.html" class="topic-link">Box Model</a></li>
                    <li><a href="flexbox.html" class="topic-link">Flexbox</a></li>
                </ul>
                    
            
            </div>
            <div class="sidebar-section">
                <h3 class="section-title" >PHP</h3>
                <ul>
                    <li><a href="php_intro.html" class="topic-link" >Introduction</a></li>
                    <li><a href="syntax.html" class="topic-link" >Syntax</a></li>
                    <li><a href="variables.html" class="topic-link" >Variables</a></li>
                    <li><a href="formhandling.html" class="topic-link">Form Handling</a></li>
                </ul>
            </div>
            <div class="sidebar-section">
                <h3 class="section-title" >IMP Questions</h3>
                <ul>
                    <li><a href="qb.html" class="topic-link" >Question Banks</a></li>
                   
                </ul>
            </div>
        </div>

        <!-- Content Area -->
        <div class="content">

            <!-- Home Intro Section -->
            <section id="home-intro" class="intro-section">
                <div class="intro-content">
                    <h1 class="intro-title">Welcome to LazyDevs</h1>
                    
                    <marquee><u>
                        LazyDevs is an open, community-driven platform offering top-tier courses in HTML, CSS, PHP, and more. </u>
                        
                    </marquee>
                </div>
                <br>
                <div>
                    <p class="intro-desc" style="font-size: 1.15rem; line-height: 1.7; margin-bottom: 50px;">
                        Dive into bite-sized lessons, hands-on examples, and playful quizzes that demystify HTML foundations, CSS styling tricks, PHP form handling, responsive design, accessibility best-practices, and modern deployment workflows. 
                        <br><br>
                        Track your progress with purr-sonalized dashboards, earn shiny achievement badges, and collaborate with fellow learners in our friendly community forums. 
                        <br><br>
                        Whether you're a curious kitten taking your first paw-step or a seasoned tabby sharpening your claws, LazyDevs equips you with real-world projects, code playgrounds, and expert tips to build, style, and deploy the web—one confident paw-print at a time.
                    </p>
                </div>
                
                <div class="contact-table" style="text-align: center;">
                    <h2>Contact Us</h2>
                    <table  style="margin: 0 auto; ">
                        <thead>
                            <tr>
                                <th>Department</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Support</td>
                                <td>support@meowwngrr.com</td>
                                <td>+1-555-MEOW</td>
                            </tr>
                            <tr>
                                <td>Instructors</td>
                                <td>instructors@meowwngrr.com</td>
                                <td>+1-555-PAWS</td>
                            </tr>
                            <tr>
                                <td>Community</td>
                                <td>community@meowwngrr.com</td>
                                <td>+1-555-CLAW</td>
                            </tr>
                            <tr>
                                <td>Hup</td>
                                <td>hup@gmail.com</td>
                                <td>+1-444-222</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </section>
            
        </div>
    </div>

    <footer>
        <p>&copy; 2025 LazyDevs. All rights reserved.</p>
    </footer>
</body>
</html>