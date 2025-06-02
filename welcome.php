<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">


        <title>Fotocafe by Malintha</title>
        <link rel="stylesheet" href="welcome.css">

    </head>
    <body>
     
        <div class="hero" id="home">
          <div class="hero-links">
            <a href="#home">Home</a>
           <a href="#about">About Us</a> 
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#contact">Contact Us</a>

            <a href="#" class="notification-icon" onclick="openSidebar()">
    <i class="ri-notification-3-fill"></i>
    <span class="notification-badge">3</span>
  </a>
          </div>
          <div id="notificationSidebar" class="sidebar">
  <div class="sidebar-header">
    <h2>Notifications</h2>
    <span class="close-btn" onclick="closeSidebar()">&times;</span>
  </div></div>
          
  </a>
            <div class="content">
                <img src = "image/bg2.jpg" alt = "profile" class="profile-img">
                  
                <h1>Welcome to Fotocafe by Malintha</h1>
                <p>Enjoy your movement with us...!</p>
                <div class="buttons">
                    <button onclick="signIn()">Sign In</button>
                    <script>
                        function signIn() {
                          window.location.href = "signin.html";
                        }
                      </script>
                    <button onclick="signUp()">Sign Up</button>
                    <script>
                        function signUp() {
                          window.location.href = "signup.html";
                        }
                      </script>
                    <button onclick="viewGallery()">Book</button>
                    <script>
                      function viewGallery() {
                        window.location.href = "booking.html";
                      }
                    </script>
               </div>
                </div>
            </div>
        </div>
        <div class="section__container about__container" id="about">
          <h2 class="section__header">WE CAPTURE THE MOMENTS</h2>
          <p class="section__description">
            At Capturer, we specialize in freezing those fleeting moments in time
            that hold immense significance for you. With our passion for photography
            and keen eye for detail, we transform ordinary moments into
            extraordinary memories.
          </p>
          <p class="section__description">
            Whether it's a milestone event, a candid portrait, or the breathtaking
            beauty of nature, we strive to encapsulate the essence of every moment,
            ensuring that your cherished memories last a lifetime. Trust us to
            capture the magic of your life's journey, one frame at a time.
          </p>
          <img src = "image/bg21.jpg" alt = "profile" class="profile-img">
        </div>

        <section class="services" id="services">
          <!-- <h2>Services</h2> -->
          <h2 class="section__header">~ SERVICE ~</h2>
          <div class="service-container">
            <div class="service-card">
              <img src="image/bg11.jpg" alt="Service 1 Photo">
              <p>Preshoot photography</p>
              <p>20000.00</p>
              <button><a href="booking.html">Book</a></button>
            </div>
            <div class="service-card">
              <img src="image/bg15.jpg" alt="Service 2 Photo">
              <p>Wedding Photography</p>
              <p>50000.00</p>
              <button><a href="booking.html">Book</a></button>
            </div>
            <div class="service-card">
              <img src="image/bg26.jpg" alt="Service 2 Photo">
              <p>Birthday shoot</p>
              <p>10000.00</p>
               <button><a href="booking.html">Book</a></button>
            </div>
            <div class="service-card">
              <img src="image/bg27.jpg" alt="Service 1 Photo">
              <p>Model shoot</p>
              <p>15000.00</p>
               <button><a href="booking.html">Book</a></button>
            </div>
            <div class="service-card">
              <img src="image/bg25.jpg" alt="Service 2 Photo">
              <p>Graduates shoot</p>
              <p>15000.00</p>
             <button><a href="booking.html">Book</a></button>
            </div>
          </div>

          <section class="gallery" id="gallery"></section>
          <!-- <h2>Gallery</h2> -->
          <h2 class="section__header">~ GALLERY~</h2>
  <div class="gallery">
    <img src="image/bg17.jpg" alt="Photo 1">
    <img src="image/bg23.jpg" alt="Photo 2">
    <img src="image/bg19.jpg" alt="Photo 3">
    <img src="image/bg20.jpg" alt="Photo 4">
    <img src="image/bg18.jpg" alt="Photo 5">
    <img src="image/bg24.jpg" alt="Photo 6">
       <img src="image/bg10.jpg" alt="Photo 7">
  </div>
        </section>


        
    <section class="section__container instagram__container" >
      <h2 class="section__header">~ Contact Us~</h2>
      <div class="instagram__flex">
        <img src="image/bg17.jpg" alt="instagram" />
        <img src="image/bg18.jpg" alt="instagram" />
        <img src="image/bg19.jpg" alt="instagram" />
        <img src="image/bg12.jpg" alt="instagram" />
        <img src="image/bg20.jpg" alt="instagram" />
        <img src="image/bg24.jpg" alt="instagram" />
        <img src="image/bg6.jpg" alt="instagram" />
        <img src="image/bg5.jpg" alt="instagram" />
      </div>
    </section>

   <footer id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <!-- <img src="image/logo-dark.png" alt="logo" /> -->
          <div class="footer__socials">
            <a href="https://www.facebook.com/profile.php?id=100021537016886&mibextid=ZbWKwL"><i class="ri-facebook-fill"></i></a>
            <a href="https://www.instagram.com/fotocafe_by_malintha_?igsh=NTc4MTIwNjQ2YQ=="><i class="ri-instagram-line"></i></a>
            <a href="https://www.fotocafe25@gmail.com"><i class="ri-mail-fill"></i></a>
           <a href="tel:+94768081112"><i class="ri-phone-fill"></i></a>
            <a href="https://wa.me/94768081112"><i class="ri-whatsapp-line"></i></a>
          </div>
        </div>
        <div class="footer__col">
          <ul class="footer__links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#gallery">GALLERY</a></li>
            
            <li><a href="#contact">CONTACT US</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>STAY IN TOUCH</h4>
          <p>
            Keep up-to-date with all things Capturer! Join our community and
            never miss a moment!
          </p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2025 photography website.
    </footer>
    <a href="#home" class="scroll-to-top">
  <i class="ri-arrow-up-line"></i>
</a>

<script>
  const scrollBtn = document.querySelector('.scroll-to-top');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
      scrollBtn.style.display = 'block';
    } else {
      scrollBtn.style.display = 'none';
    }
  });

  // Initially hide the button
  scrollBtn.style.display = 'none';

</script>
<script>
function openSidebar() {
  document.getElementById("notificationSidebar").style.width = "300px";
}

function closeSidebar() {
  document.getElementById("notificationSidebar").style.width = "0";
}
</script>



        <!-- <script src="script.js"></script>
         <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
    </body>
</html>