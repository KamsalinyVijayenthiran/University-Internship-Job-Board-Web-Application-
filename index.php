<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="styles.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@3.0.0/dist/typed.umd.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Web Design Mastery | CampusHire</title>
  </head>
  <body>
    <!-- Navigation -->

    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#" class="logo">Campus<span>Hire</span></a>
        </div>

        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>

      <ul class="nav__links" id="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#jobs">Jobs</a></li>
        <li><a href="#service">Services</a></li>
        <li><a href="#client">Client</a></li>
        <li><a href="#contact">Contact</a></li>
        <li>
          <a href="LoginRegister/LoginRegister.php">
            <button class="btn">Register</button>
          </a>
        </li>
      </ul>
    </nav>



    <!--Home-->
    <header class="section__container header__container" id="home">
      <img src="assets/google.png" alt="header" />
      <img src="assets/twitter.png" alt="header" />
      <img src="assets/amazon.png" alt="header" />
      <img src="assets/figma.png" alt="header" />
      <img src="assets/linkedin.png" alt="header" />
      <img src="assets/microsoft.png" alt="header" />

      <h2>
        <img src="assets/bag.png" alt="bag" />
        Internship & Job Board for University Students
      </h2>

      <h1>Search, Apply &<br />Launch Your <span>Career</span></h1>

      <p>
        "student-friendly" and "before graduation" <br> to resonate with your target audience.
      </p>

      <div class="header__btns">
        <button class="btn">Browse Jobs</button>
        <a href="#">
          <span><i class="ri-play-fill"></i></span>
          How It Works?
        </a>
      </div>
    </header>





    <!-- About -->
    <section class="steps" id="about">
      <div class="section__container steps__container">
        <h2 class="section__header">
          Land Your Dream Job in 4 <span>Simple Steps</span>
        </h2>

        <p class="section__description">
          Follow Our Simple, Step-by-step Guide to Simply Land Your Intern 
          and Start Your New Career Journey
        </p>

        <!-- Create Your Free Student Profile -->
        <div class="steps__grid">
          <div class="steps__card">
            <span><i class="ri-user-fill"></i></span>
            <h4>Create Your Free Student Profile</h4>
            <p>
              Build your professional profile in minutes – showcase your skills, education, 
              and aspirations to potential employers with our student-friendly platform.
            </p>
          </div>


          <!-- Discover Student-Friendly Roles -->
          <div class="steps__card">
            <span><i class="ri-search-fill"></i></span>
            <h4>Discover Student-Friendly Roles</h4>
            <p>
              Explore thousands of internships and entry-level positions perfectly matched to 
              your field of study, schedule, and career goals.
            </p>
          </div>


          <!-- Upload Your CV/Resume -->
          <div class="steps__card">
            <span><i class="ri-file-paper-fill"></i></span>
            <h4>Upload Your CV/Resume</h4>
            <p>
              Easily upload or create a polished resume that highlights your academic achievements 
              and gets noticed by top employers
            </p>
          </div>


          <!-- Get Hired Before Graduation -->
          <div class="steps__card">
            <span><i class="ri-briefcase-fill"></i></span>
            <h4>Get Hired Before Graduation</h4>
            <p>
              Launch your career early! Secure your dream internship or job offer while still in 
              school and graduate with experience already on your resume.
            </p>
          </div>
        </div>
      </div>
    </section>




    <!-- Jobs page -->
    <section class="section__container explore__container" id="jobs">
      <h2 class="section__header">
        Explore 3,000+ Student-Friendly<span>Jobs & Internships</span>
      </h2>

      <p class="section__description">
        Find part-time, remote, and entry-level roles that fit your schedule-all in one place.
      </p>

      <div class="explore__grid">

        <!-- Software Development -->
        <div class="explore__card">
          <span><img src="assets/6Software Development.png" alt="Upload Icon" style="width: 24px; height: 24px;"></span>
          <h4>Software Development</h4>
          <p>1,200+ jobs (Full-stack, Frontend, Backend, Mobile)</p>
        </div>

        <!-- Data Science & AI -->
        <div class="explore__card">
          <span><img src="assets/7Data Science & AI.png" alt="Upload Icon" style="width: 24px; height: 24px;"></span>
          <h4>Data Science & AI</h4>
          <p>800+ jobs (Machine Learning, NLP, Computer Vision)</p>
        </div>

        <!-- Cybersecurity -->
        <div class="explore__card">
          <span><img src="assets/8cyber-security.png" alt="Upload Icon" style="width: 24px; height: 24px;"></span>
          <h4>Cybersecurity</h4>
          <p>700+ jobs (AWS, Azure, DevOps, Kubernetes)</p>
        </div>

        <!-- Cloud Computing -->
        <div class="explore__card">
          <span><img src="assets/9Cloud Computing.png" alt="Upload Icon" style="width: 24px; height: 24px;"></span>
          <h4>Cloud Computing</h4>
          <p>700+ jobs (AWS, Azure, DevOps, Kubernetes)</p>
        </div>

        <!-- UX/UI Design -->
          <div class="explore__card">
            <span><img src="assets/10ui-ux.png" alt="Upload Icon" style="width: 24px; height: 24px;"></span>
            <h4>UX/UI Design</h4>
            <p>400+ jobs (Product Design, Interaction Design)</p>
          </div>

            <!-- Networking & IT Support -->
            <div class="explore__card">
                <span><img src="assets/11Networking & IT Support.png" alt="Upload Icon" style="width: 24px; height: 24px;"></span>
                <h4>Networking & IT Support</h4>
                <p>600+ jobs (System Admins, Network Engineers)</p>
            </div>

            <!-- Frontend Development -->
            <div class="explore__card">
                <span><img src="assets/12Frontend Development.png" alt="Upload Icon" style="width: 24px; height: 24px;"></span>
                <h4>Frontend Development</h4>
                <p>900+ Jobs (React, Vue, JavaScript, TypeScript)</p>
            </div>

            <!-- Backend Development -->
            <div class="explore__card">
                <span><img src="assets/13Backend Development .png" alt="Upload Icon" style="width: 24px; height: 24px;"></span>
                <h4>Backend Development</h4>
                <p>750+ Jobs (Node.js, Python, PHP, Ruby on Rails, Java)</p>
            </div>
      </div>

      <div class="explore__btn">
      <a href="jobOpening.php" class="btn">View All Internships</a> 
      <a href="jobOpening.php" class="btn">View All Job Openings</a>
    
    </div>

      


    </section>








    








    <!-- Services page -->
    <section class="section__container offer__container" id="service">
      <h2 class="section__header">Boost Your <span>Career</span></h2>
      <p class="section__description">
        Discover the tools and expert resources designed to help you land your dream internship and kickstart your career.
      </p>
      <div class="offer__grid">
        <div class="offer__card">
          <img src="assets/offer-1.jpg" alt="offer" />
          <div class="offer__details">
            <span>01</span>
            <div>
              <h4>Smart Job Matching</h4>
<p>
    Our intelligent algorithms connect you with internship opportunities that perfectly align with your technical skills and career goals.
</p>
            </div>
          </div>
        </div>
        <div class="offer__card">
          <img src="assets/offer-2.jpg" alt="offer" />
          <div class="offer__details">
            <span>02</span>
            <div>
              <h4>Professional Portfolio Builder</h4>
<p>
    Highlight your projects and technical skills with a sleek, industry-standard portfolio that captures employer attention.
</p>
            </div>
          </div>
        </div>
        <div class="offer__card">
          <img src="assets/offer-3.jpg" alt="offer" />
          <div class="offer__details">
            <span>03</span>
            <div>
              <h4>Path to Success</h4>
<p>
    Get professional consultation to refine your interview skills and build a clear roadmap for your long-term career growth.
</p>
            </div>
          </div>
        </div>
      </div>
    </section>









    <!-- Client page -->
    <section class="section__container client__container" id="client">
      <h2 class="section__header">Member <span>Success Stories</span></h2>
      <p class="section__description">
    Read inspiring stories from users who found their perfect match and see how we are shaping the future of campus recruitment.
</p>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="client__card">
              <img src="assets/client-1.jpg" alt="client" />
             <p>
    "CampusHire transformed my internship search from overwhelming to effortless. Within days of 
    uploading my profile, I was connected with top-tier companies, and I've now landed my dream 
    role. I couldn't have asked for a better start to my professional journey!"
</p>
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <h4>Priya Sharma</h4>
<h5>Web Development Intern</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <img src="assets/client-2.jpg" alt="client" />
             <p>
    "After graduating, I felt overwhelmed by the job market, but CampusHire provided a clear 
    roadmap to success. The step-by-step guidance and professional tools helped me secure 
    multiple interviews. I’m now thriving in my new role thanks to this incredible platform!"
</p>
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-half-fill"></i></span>
              </div>
              <h4>Aria Mitchell</h4>
<h5>Software Engineering Graduate</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <img src="assets/client-3.jpg" alt="client" />
              <p>
                Creating an account was a breeze, and I was amazed by the number
                of job opportunities available. Thanks to this website, I found
                the perfect position that aligned perfectly with my career
                goals.
              </p>
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <h4>David Smith</h4>
              <h5>Software Engineer</h5>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- Contact -->

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<section class="contact" id="contact">
    <h2 class="section-title">Get In <span>Touch</span></h2>

    <div class="contact-container">
        <div class="contact-left">
            <div class="info-box">
                <h3 class="info-title">Contact Information</h3>
                <div class="contact-item">
                    <div class="icon-small"><i class='bx bx-envelope'></i></div>
                    <div>
                        <p>Email</p>
                        <span><a href="mailto:campushire@gmail.com">campushire@gmail.com</a></span>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon-small"><i class='bx bx-phone'></i></div>
                    <div>
                        <p>Phone</p>
                        <span><a href="tel:+94700452389">+94 700 452 389</a></span>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon-small"><i class='bx bx-map'></i></div>
                    <div>
                        <p>Location</p>
                        <span>Colombo 13, Sri Lanka</span>
                    </div>
                </div>
            </div>

            <div class="follow-box">
                <h3 class="info-title">Follow Me</h3>
                <div class="social-row">
                    <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
                    <a href="#" target="_blank"><i class='bx bxl-github'></i></a>
                </div>
            </div>
        </div>

        <div class="contact-right">
            <h3 class="info-title">Send a Message</h3>
            <form class="contact-form" id="contact-form">
                <input type="text" name="from_name" placeholder="Your Name" required>
                <input type="email" name="from_email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit" class="send-btn" id="submit-btn">
                    <i class='bx bx-send'></i> <span>Send Message</span>
                </button>
            </form>
        </div>
    </div>
</section>







    <!-- footer page -->
    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#" class="logo">Campus<span>Hire</span></a>
          </div>
          <p>
            Our platform is designed to help you find the perfect job and
            achieve your professional dreams.
          </p>
        </div>
        <div class="footer__col">
          <h4>Quick Links</h4>
          <ul class="footer__links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Follow Us</h4>
          <ul class="footer__links">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">LinkedIn</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Contact Us</h4>
          <ul class="footer__links">
            <li>
              <a href="#">
                <span><i class="ri-phone-fill"></i></span> +94 700452389
              </a>
            </li>
            <li>
              <a href="#">
                <span><i class="ri-map-pin-2-fill"></i></span> Colombo 13. Sri Lanka
              </a>
            </li>

            <li>
                        <a href="#">
                            <span><i class="ri-mail-fill"></i></span> campushire@gmail.com
                        </a>
                    </li>
          </ul>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2025 CampusHire. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
