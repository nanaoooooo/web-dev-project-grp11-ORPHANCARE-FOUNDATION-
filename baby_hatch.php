<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrphanCare Foundation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>
<body>
    <style>

body {
      margin: 0;
      padding: 0;
    }
    .sub-header7 {
    min-height: 90vh;
    width: 100%;
    background-image: url(img/b.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    }
    .call-btn{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    border: 1px solid #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    cursor: pointer; 
    border-radius: 10px; 
}
.text-box {
  text-align: left;
}

.text-box h1,
.text-box p,
.text-box a {
  text-align: left;
  margin-left: 14%;
}

.hero-btn:hover{
    border: 1px solid #f44336;
    background: #fdb2ad;
    transition: 1s;
}
.hero-btn i {
  margin-right: 5px;
}
  .hero-btn {
  color: #e10931
} 
.location{
    width: 80%;
    margin: auto;
    padding: 80px 0;
          }
.location iframe{
    width: 100%;
          }
.infant-hatcheries {
    text-align: center;
    margin-top: 50px;
    background-color: #59a3f371; /* Set the background color to blue */
    color: #fff; /* Set the text color to white */
    padding: 40px 20px;
    word-spacing: 5px;

    }

.infant-hatcheries h2 {
      margin-bottom: 20px;
      padding:  0 20px;
    }

.infant-hatcheries p {
      margin-bottom: 10px;
      padding: 0 20%;
    }
    .image-bkg {
      background-image: url('img/About\ the\ Baby\ Hatch\ Project.jpg');
      background-size: cover;
      background-position: center;
      color: #fff; 
    position: relative;
    min-height: 80vh;
    width: 80%;
    }
.con {
  height: 90vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: none;
}
.testimonial {
  position: relative;
  max-width: 900px;
  width: 100%;
  padding: 50px 0;
  overflow: hidden;
}
.testimonial .image {
  height: 170px;
  width: 170px;
  object-fit: cover;
  border-radius: 50%;
}
.testimonial .slide {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  row-gap: 30px;
  height: 100%;
  width: 100%;
}
.slide p {
  text-align: center;
  padding: 0 160px;
  font-size: 14px;
  font-weight: 400;
  color: #333;
}
.slide .quote-icon {
  font-size: 30px;
  color: #4070f4;
}
.slide .details {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.details .name {
  font-size: 14px;
  font-weight: 600;
  color: #333;
}
.details .job {
  font-size: 12px;
  font-weight: 400;
  color: #333;
}
/* swiper button css */
.nav-btn {
  height: 40px;
  width: 40px;
  border-radius: 50%;
  transform: translateY(30px);
  background-color: rgba(0, 0, 0, 0.1);
  transition: 0.2s;
}
.nav-btn:hover {
  background-color: rgba(0, 0, 0, 0.2);
}
.nav-btn::after,
.nav-btn::before {
  font-size: 20px;
  color: #fff;
}
.swiper-pagination-bullet {
  background-color: rgba(0, 0, 0, 0.8);
}
.swiper-pagination-bullet-active {
  background-color: #4070f4;
}
@media screen and (max-width: 768px) {
  .slide p {
    padding: 0 20px;
  }
  .nav-btn {
    display: none;
  }
}
    </style>
<section class="sub-header7">
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
    <div class="text-box">
        <h1>BABY HATCH</h1>
        <p>A safe place for your baby</p>
        <a href="about.php" class="hero-btn">
            <i class="fas fa-phone-alt"></i> 24/7 HELP
          </a>
    </div>
</section>

<!-- Location CONTENT -->
<section class="location">
<h1>Are you pregnant and in need of help?</h1><br>
<h2>Reach Us Here </h2><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15936.06270543261!2d101.6550649!3d3.0904853!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4bf8461334e5%3A0xf223e8ce79e3dcc5!2sOrphanCare%20Foundation!5e0!3m2!1sen!2smy!4v1687673845297!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

    <section class="infant-hatcheries">
        <h2>Our Infant Hatcheries</h2>
        <p>OrphanCare maintains three infant hatcheries in Peninsular Malaysia: Petaling Jaya, Johor Bahru, and Sungai Petani in Kedah. We also work with Hospital Pakar An-Nur, Bangi, and KPJ Hospitals, both of which are well-known healthcare organisations in the region. KPJ Hospitals has three infant hatcheries across the country.</p>
        <p>Our infant hatcheries adhere to the German system. They are air-conditioned, secure, and have a 24-hour CCTV within the hatch that alerts the carer if a baby is left in the hatch. The mother is not identified by the camera.</p>
      </section>
<section>
    <section class="image-bkg">
</section>
<!-- SLIDER -->
<section class="con">
    <div class="testimonial mySwiper">
      <div class="testi-content swiper-wrapper">
        <div class="slide swiper-slide">
            <h3>Birth Mother Testimonials while at OrphanCare</h3>
          <img src="img/2.png" alt="" class="image" />
          <p>
            "Counselling has been transformative, offering guidance and solace during challenging times. Grateful for the empathetic support and tools to navigate life's hurdles. It's a journey of self-discovery, leading to personal growth and healing."
          </p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Zulalina</span>
            <span class="job">Birth Mother, 25 yr</span>
          </div>
        </div>
        <div class="slide swiper-slide">
            <h3>Adoption Stories</h3>
          <img src="img/1.png" alt="" class="image" />
          <p>"Adoption has transformed my life, bringing boundless joy and love. Grateful for this journey, embracing parenthood with open hearts. Forever family."</p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Sofea</span>
            <span class="job">Baby Adoption</span>
          </div>
        </div>
        <div class="slide swiper-slide">
        <h3>Birth Mother Testimonials while at OrphanCare</h3>
          <img src="img/3.png" alt="" class="image" />
          <p>
            "Choosing adoption was an agonizing decision, but it led to a beautiful outcome. Witnessing my child thrive in a loving home, I feel grateful for the selflessness and the chance to provide a better life."
          </p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Ariana</span>
            <span class="job">Birth Mother, 28 yr</span>
          </div>
        </div>
        <div class="slide swiper-slide">
            <h3>Adoption Stories</h3>
          <img src="img/4.png" alt="" class="image" />
          <p> "Adoption connected us with a child we never knew we needed. They've enriched our lives in unimaginable ways, and we're forever grateful for the gift of parenthood through adoption."</p>
          <i class="bx bxs-quote-alt-left quote-icon"></i>
          <div class="details">
            <span class="name">Nana</span>
            <span class="job">Baby Adoption</span>
          </div>
        </div>
      </div>
      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

<!-- FOOTER -->
<section class="footer">
    <h4> Let,s talk!</h4>
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
<script src="js/swiper-bundle.min.js"></script>
<script src="bscript.js"></script>

</body>
</html>