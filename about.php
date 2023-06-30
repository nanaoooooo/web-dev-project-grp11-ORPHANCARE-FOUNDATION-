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
<section class="sub-header">
    <nav>
        <a href="about.php"></a><img src="img/logo.png"  alt="Logo"></a>
        <div class="nav-links" id="nav-links">
            <i class="fa fa-times" onclick="hideMenu()"></i> 
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li> 
                <li><a href="our_works.php">OUR WORK</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="join.php">GET INVOLVED</a></li>
                <a href="contact_us_form.php" class="sub-btn">CONTACT US</a>
        </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <br><h1>We believe no child should be abandoned or <br>denied the <span class="highlight">love and care of a family</span>.</h1><br><br><br><br><br><br><br>
    <div class="picture">
        <img src="img/people.jpg" class="rounded-frame">
      </div>
</section>

<!-- VISION AND MISSION  -->
<section class="vm">
    <div class="vm-row">
        <div class="vm-col">
            <i class="fas fa-rocket"></i>
            <div>
                <h3>Our Vision</h3>
                <p>OrphanCare Foundation as the centre of excellence and 
                    knowledge for family-based care.</p>
            </div>
        </div>
        <div class="vm-col">
            <i class="fas fa-crosshairs"></i>
            <div>
                <h3>Our Mission</h3>
                <p>OrphanCare Foundation advocates and provides services that ensure 
                    babies and children who are in institutions and those whose lives
                    are at risk, the opportunity to grow up in the care of a loving family.</p>
            </div>
        </div>
    </div>
</section>

<!-- FOUNDER STORY -->
<section>
    <div class="story">
    
      </div> 
</section>

<!-- OUR GOALS -->
<section class="goals">
    <div class="row">
        <div class="goals-col">
            <h1>Why we do this</h1>
            <p>We want children out of institutions and cared for by families. 
                This vision drives OrphanCare. We believe children have the right to love, 
                security, shelter, health and education as enshrined in Malaysia’s Child Act 
                (Amendment) 2016 and the United Nations Convention on the Rights of the Child 
                (UNCRC). The damage caused by institutions makes us passionate about our mission.</p>
                <button class="learn-more-btn" onclick="showPopup()">Learn More</button>
        </div>
        <div class="goals-col">
            <img src="img/goals.png">
        </div>
    </div>
    <div class="popup-container" id="popupContainer">
        <div class="popup-content">
            <h2>SCAN ME</h2><br>
            <div id="qrCode"></div><br>
            <button class="exit-btn" onclick="hidePopup()">Exit</button>
        </div>
    </div>
</section>

<!-- FOOTER -->
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
        document.getElementById('popupContainer','btnContainer').style.display = 'block';
    }

    function hidePopup() {
        document.getElementById('popupContainer','btnContainer').style.display = 'none';
    }
</script>
<!-- generates a QR code-->
<script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/qrious.min.js"></script>
<script>
  function generateQR() {
    var youtubeURL = "https://www.youtube.com/watch?v=29yqjDmDGns"; // YouTube URL
    var qr = new QRious({
      element: document.getElementById('qrCode'),
      value: youtubeURL,
      size: 200
    });

    // Make the QR code clickable
    var qrLink = document.createElement("a");
    qrLink.href = youtubeURL;
    qrLink.target = "_blank";
    qrLink.appendChild(qr.canvas);
    document.getElementById('qrCode').innerHTML = '';
    document.getElementById('qrCode').appendChild(qrLink);
  }

  // Generate QR code on page load
  generateQR();
</script>
</body>
</html>

