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
<section class="sub-header4">
    <nav>
        <a href="home.php"><img src="img/logo.png" alt="Logo"></a>
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
<!-- posts -->
<section class="post">
    <!-- box 1 -->
    <div class="post-box">
        <img src="img/box1.jpeg" alt="" class="post-img">
        <a href="box1.php" class="post-title">
            Why Adopt ?
        </a>
        <span class="post-date">12 Feb 2023</span>
        <p class="post-decription">A basic question but kind of important too, 
            don’t you think? Many women who find themselves in an unplanned pregnancy
             will say things like, “I could never give my baby away!” But that is usually 
             before they understand what kind of families are out there and looking.</p>
    </div>
     <!-- box 2 -->
     <div class="post-box">
        <img src="img/box2.jpeg" alt="" class="post-img">
        <a href="box1.html" class="post-title selectable-text">
            An Adoption Story
        </a>
        <span class="post-date">22 Jan 2023</span>
        <p class="post-description">Like pregnancy and birth, no two adoption stories are the same.
        Read our reader stories about the trials and triumphs of parents who have adopted.</p>
    </div>
     <!-- box 3 -->
     <div class="post-box">
        <img src="img/box3.jpeg" alt="" class="post-img">
        <a href="box1.html" class="post-title">
            What is needed to end the institutionalisation of children in Malaysia:
        </a>
        <span class="post-date">12 Dec 2022</span>
        <p class="post-description">Here’s what we can do to deinstitutionalise the 
        children of Malaysia</p>
    </div>
     <!-- box 4 -->
     <div class="post-box">
        <img src="img/box4.jpeg" alt="" class="post-img">
        <a href="box1.html" class="post-title">
            Baby hatches to reduce baby dumping cases in Malaysia
        </a>
        <span class="post-date">31 Oct 2022</span>
        <p class="post-description">Many argue that having baby hatches may encourage more acts of
        sexual activities within youths. But is that really the case?</p>
    </div>
     <!-- box 5 -->
     <div class="post-box">
        <img src="img/box5.jpeg" alt="" class="post-img">
        <a href="box1.html" class="post-title">
            Are you pregnant and scared? OrphanCare is here to help
        </a>
        <span class="post-date">3 Apr 2022</span>
        <p class="post-description">Handling an unwanted pregnancy can be an emotional experience.
        Everyone’s circumstances are different. This is where OrphanCare comes in.</p>
    </div>
     <!-- box 6 -->
     <div class="post-box">
        <img src="img/box6.jpeg" alt="" class="post-img">
        <a href="box1.html" class="post-title">
            Celebrating the Power of Moms: A Mother’s Day Tribute from OrphanCare
        </a>
        <span class="post-date">29 Feb 2023</span>
        <p class="post-description">Happy Mother’s Day! In homage to the incredible work mothers do,
        we’d like to pay respects to today’s features on OrphanCare’s success stories: Siti:
         A Single Mother’s Struggle and Triumph Siti, a single mother of</p>
    </div>
    
</section>
<!-- FOOTER -->
<section class="footer">
    <h4> Let's talk!</h4>
    <p>Let us know if you have any further questions regarding the baby hatch or the adoption process.</p>
    <div class="icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
        <i class="fas fa-envelope"></i>
    </div>
    <hr class="line">
    <h5>© OrphanCare Copyright 2023</h5>
</section>

<section>  
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
