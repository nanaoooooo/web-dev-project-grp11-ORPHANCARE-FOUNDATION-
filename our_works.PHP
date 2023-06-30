<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrphanCare Foundation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<section class="sub-header3">
    <nav>
        <a href="our_works.php"></a><img src="img/logo.png"  alt="Logo"></a>
        <div class="nav-links" id="nav-links">
            <i class="fa fa-times" onclick="hideMenu()"></i> 
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li> 
                <li><a href="our_works.php">OUR WORK</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="join.php">GET INVOLVED</a></li>
                <button class="sub-btn" onclick="showPopup()">CONTACT US</button>
            </div>
        
            <div class="btn-container" id="btnContainer">
                <div class="btn-content">
                    <div class="exit-button-container">
                        <a href="home.php" class="exit-button" onclick="window.close()"><i class="fas fa-times"></i></a>
                    </div>
                    <img src="img/logo.png"><br><br>
                    <h1>Get in Touch with Us</h1><br>
                    <p>Got questions? Looking for help or advice? Do you want to share your thoughts? Need to know who, why, what, where, or when? We’re happy to help answer your questions.</p>
                    <p>Do also check out our extensive FAQs for answers to anything you might be wondering. Otherwise, you can shoot us a message and we will try our best to answer your questions promptly.</p>
                    <button class="exit-btn" onclick="window.location.href = 'contact_us_form.php';">Send us a message</button>
                </div>
            </div>
        </ul>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
</section>
<!-- WORKS -->
<section class="works">
    <div class="works-row">
        <div class="works-col">
            <br><br><br><br><h1>Adoption</h1>
            <h2>The children deserves better</h2>
            <p>We help couples in Malaysia navigate the adoption process. We will also 
                help facilitate your adoption journey from start to finish. At OrphanCare,
                there are three types of adoption and we can help you match with your future 
                children. Let us guide you to start your adoption journey..</p>
                <a href="adoption.php" class="hero-btn red-btn">LEARN MORE</a>
             </div>
             <div class="works-col">
                <img src="img/adoption.png" class="fly-in">
                <br><br><br><br></div>

             <div class="works-col">
                <img src="img/advocacy.png" class="fly-in">
            </div>
            <div class="works-col">
                <br><br><br><br><h1>Advocacy</h1>
            <h2>Climbing out of old Paradigms</h2>
            <p>Advocacy and awareness raising are major activities at OrphanCare. We use knowledge 
                gained through our services to advocate policies and practices. We host Reproductive
                Health talks for youths, webinars to educate on DI as well as Parent Training as a part 
                of our adoption programme.</p>
                <a href="our_works.PHP" class="hero-btn red-btn">LEARN MORE</a>
                <br><br><br><br></div>

        <div class="works-col">
            <br><br><br><br><h1>Counselling</h1>
            <h2>We are committed to help</h2>
            <p>OrphanCare provides counselling to selected clients such as children and their families who
                are in the process of reintegration as well as young girls and women coping with an unplanned pregnancy.
                Counselling helps the client cope with a potentially very stressful situation. Sharing a concern can
                relieve anxiety and other uncomfortable feelings. If you fall under the category of our counselling 
                clients and in need of help, we may be able to help you</p>
                <a href="our_works.PHP" class="hero-btn red-btn">LEARN MORE</a>
            </div>
                <div class="works-col">
                    <img src="img/Counselling.png" class="fly-in">
                    <br><br><br><br> </div>
             
            <div class="works-col">
                <img src="img/Reintegration.png" class="fly-in">
                </div>
            <div class="works-col">
                <br><br><br><br><h1>Reintegration</h1>
            <h2>Transitioning to family based care</h2>
            <p>WReintegration is a careful process of reuniting a child from an institution back into the care of his or her family. 
                If a child cannot be reintegrated with his or her natural parents or extended family, the child can be adopted.
                OrphanCare’s reintegration programme’s priority is always for the child’s wellbeing and safety.</p>
                <a href="our_works.PHP" class="hero-btn red-btn">LEARN MORE</a>
                <br><br><br><br></div>

        <div class="works-col">
            <br><br><br><br><h1>Baby Hatch</h1>
            <h2>A Safe Place For Your Baby</h2>
            <p>We encourage couples, women or anyone who needs help with an unplanned pregnancy to contact us or leave their newborn 
               at our 24 hour baby hatches. We also highly recommend walk-ins and rest assured, there would be no judgments.
                We can help you.</p>
                <a href="baby_hatch.php" class="hero-btn red-btn">LEARN MORE</a>
             </div>
             <div class="works-col">
                <img src="img/baby hatch.png" class="fly-in">
                <br><br><br><br></div>
    </div>
</section>



<section class="footer">
    <h4> Let's talk!</h4>
    <p>Let us know if you have any further questions regarding the baby hatch or the adoption process.</p>
    <div class="icons">
        <div class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
            <i class="fas fa-envelope"></i>
          </div>
          
    </div>
    <hr class="line">
    <h5>© OrphanCare Copyright 2023</h5>
</section>


<script>

    var navLinks = document.getElementById("navLinks");
    function hideMenu(){
        navLinks.style.right = "0";
    }
    function showMenu(){
        navLinks.style.right = "-200px";
    }
    function showPopup() {
        document.getElementById('btnContainer').style.display = 'block';
    }

    function hidePopup() {
        document.getElementById('btnContainer').style.display = 'none';
    }
</script>

</body>
</html>

