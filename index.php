<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="./Images/BG-Images/URL-LOGO.png">
    
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Typed JS CDN-->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>


    <!-- Slick Slider CSS CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">


    <!-- Custom CSS-->
    <link rel="stylesheet" href="./CSS/style.css">


</head>
<body>
     <!-- Multi Language Box -->
    <div id="google_translate_element"></div>

<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
  </script>
  
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
  
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand ml-3" href="#"><img src="/Images/BG-Images/logo.png"  height="40" width=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars-staggered fa-bounce fa-xl" style="color: #dc3545;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
              <li class="nav-item ">
                <a class="nav-link" href="#service">Service</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link mb-2" href="#contact">Contact</a>
                </li>
              <li class="nav-item">
                <a href="Resume.pdf" download><button class="btn btn-outline-danger ml-auto rounded-pill mb-2">Download Resume <span><i class="fa-solid fa-download fa-lg"></i></span></button></a>
            </li>
            </ul>
        </div>
    </nav>


    <section id="home">
    <!-- Header Section -->
      <div class="marquee-container">
        <div class="marquee-text">
          <span>My❤️is for Computer Networking and System Administration , But 🧠 is for Data and Data Science🚀.</span>
        </div>
      </div>
       <div class="portfolio-banner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <img src="./Images/BG-Images/Profile-Image.png" alt="Profile Image" class="profile-image">

              <div class="banner-content">
                <h1 style="font-size: 2.3rem;">Hi, I'm <span style="color: #dc3545;">Raj</span></h1>
                <h1 style="font-size: 2.3rem;">and love to do<br><span style="color: #dc3545;"><span id="typed"></span></h1>
                <p style="font-size: 1.2rem;">Let's create something amazing together !</p>
                <a class="btn btn-outline-danger btn-lg rounded-pill " href="Resume.pdf" style="font-size: 1.2rem;" download>Download Resume <span><i class="fa-solid fa-download fa-lg"></i></span></a>
              </div>
            </div>
          </div>
        </div>
       </div>
     </section>


    <!-- Counter Section -->
    <section id="counter">
      <section class="counter">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
              <h3>
                <span id="count1"></span>+
              </h3>
              <p>Projects</p>
            </div>
            <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
              <h3>
                <span id="count2"></span>+
              </h3>
              <p>Happy Clients</p>
            </div>
            <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
              <h3>
                <span id="count3"></span>+
              </h3>
              <p>Repositories</p>
            </div>
            <div class="col-md-3 mb-lg-0 mb-md-0 mb-0 col-sm-6">
              <h3>
                <span id="count4"></span>+
              </h3>
              <p>Skills</p>
            </div>
          </div>
        </div>
      </section>
    </section>


    <!-- About Section -->
    <section id="about">
        <div class="container mt-5">
          <div class="container-fluid row">
          <div class="col-lg-5 offset-lg-1 mb-3">
            <h2 class="">About Me</h2>
            <p id="paragraph">Hello there! I'm <span class="myself">Raj Kumar</span> , very passionate about Network & System Administration. With a background in Advance Diploma In IT Networking & Cloud Computing . Through my portfolio, you'll witness a fusion of creativity and expertise in <span class="myself">Windows Server , Cisco Packet Tracer , Linux </span> etc. Let's embark on a transformative journey together and make an impact. Excited to connect and explore opportunities with you!</p>
              </div>
              <div class="col-lg-5 offset-lg-1 mb-5">
                <img class="img img-fluid" src="/Images/BG-Images/code.gif">
              </div>
            </div>
        </div>

        <!-- Skill Section -->
        <section class="skills-section">
          <h2>My Skills</h2>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="skill-name" >Front-end Development</div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 80%;color:#fff;font-weight:bold;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="skill-name">Back-end Development</div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%;color:#fff;font-weight:bold;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="skill-name">Data Analysis</div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%;color:#fff;font-weight:bold;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="skill-name">System Administration</div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 65%;color:#fff;font-weight:bold;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="skill-name">Digital Marketing</div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%;color:#fff;font-weight:bold;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                  </div>
                </div>
                
              <div class="col-md-6">
                <div class="skill-name">Cyber Security</div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 50%;color:#fff;font-weight:bold;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- Project Section -->
    <section id="projects" >
      <div class="container">
        <h2 class="pb-5 pt-5" >My Projects</h2>
          <div class="row">
              <div class="col-md-4">
                  <div class="card">
                      <img src="/Images/Project-Images/ExcelProject-1.png" alt="Project 1">
                      <h4 align="center">Excel Data Analysis</h4>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img src="/Images/Project-Images/PortfolioProject-1.jpg" alt="Project 1">
                      <h4 align="center">Portfolio Website</h4>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img src="/Images/Project-Images/Website-2.jpg" alt="Project 1">
                      <h4 align="center">Ecommerce Site</h4>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <img src="/Images/Project-Images/Server-Img.png" alt="Project 1">
                      <h4 align="center">Server 2016</h4>
                  </div>
              </div>
            
              <!-- Add more projects here -->
          </div>
      </div>
      <h2 class="mt-5">My Certificates</h2>
  </section>
    </section>


     <!-- Certificates Section -->
     <section id="certificates">
      <div class="container-fluid mb-5">
       
       <section class="customer-logos slider " >
       <div class="slide slide-1 m-2 p-2 ">
           <a href="/Images/Certificates-Images/" target="_blank">
           <img src="/Images/Certificates-Images/Computer Networks Fundamentals.jpg" alt="Certificates"></a>
         </div>
         <div class="slide slide-2 m-2 p-2">
           <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
           <img src="./Images/Certificates-Images/The Complete Computer Basics Course.jpg" alt="Certificates"></a>
         </div>
         <div class="slide slide-1 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/Secure your IT Systems & Network For Sys Admins + Engineers.jpg" alt="Certificates"></a>
        </div>
        <div class="slide slide-2 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/Ubuntu Linux for beginners.jpg" alt="Certificates"></a>
        </div>
        <div class="slide slide-1 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/Cyber Security Awareness Training For Absolute Beginners.jpg" alt="Certificates"></a>
        </div>
        <div class="slide slide-2 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/CyberSecurity Bootcamp The Ultimate Beginner's Course.jpg" alt="Certificates"></a>
        </div>
        <div class="slide slide-1 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/Mastering Network Security Defending Against Cyber Threats.jpg" alt="Certificates"></a>
        </div>
        <div class="slide slide-2 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/CSS, Bootstrap, JavaScript And PHP Stack Complete Course.jpg" alt="Certificates"></a>
        </div>
        <div class="slide slide-1 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/The Complete MySQL.jpg" alt="Certificates"></a>
        </div>
        <div class="slide slide-2 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/Essential Microsoft Excel from Beginner to Advance level.jpg" alt="Certificates"></a>
        </div>
        <div class="slide slide-1 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/Advanced Excel Course for Job and Real World.jpg" alt="Certificates"></a>
        </div>
        <div class="slide slide-2 m-2 p-2">
          <a href="/Images/Certificates-Images/cert.jpg" target="_blank">
          <img src="./Images/Certificates-Images/Power BI Mastery Advanced Data Analytics & Visualizations.jpg" alt="Certificates"></a>
        </div>
       </section>
     </div>
   </section>

    

    <!-- Paralex Section -->
   <section id="paralex">
    <div class="Paralex container-fluid mt-5 mb-5">
      <div class="container Paralex-text">
        <div class="row text-center">
          <div class="col-lg-9 col-md-12">
          </div>
          <div class="col-lg-3 col-md-12 mt-lg-0">
            <a href="Resume.pdf" target="_blank" download><button class="btn btn-outline-danger ml-auto rounded-pill active">Download Resume <span><i class="fa-solid fa-download fa-lg"></i></span></button></a>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- Service Section -->
  <section id="service" >
    <div class="pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="section_head col-sm-12 mt-5">
                    <h4><span>I Can Help You With</span></h4>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="item">
                      <span class="icon feature_box_col_one">
                          <i class="fa-solid fa-computer fa-beat" style="color:#dc3545"></i>
                      </span>
                      <h5>System Admin</h5>
                      <p>Efficiently managing ensuring seamless operations and peak performance reliability.
                      </p>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="item">
                    <span class="icon feature_box_col_two">
                        <i class="fa-solid fa-wifi fa-beat" style="color:#dc3545"></i>
                    </span>
                    <h5>Network Admin</h5>
                    <p>Expertly managing networks for seamless operations and efficient communication.
                    </p>
                </div>
            </div>
                <div class="col-lg-4 col-sm-6 ">
                    <div class="item">
                        <span class="icon feature_box_col_three">
                            <i class="fa-brands fa-stack-overflow fa-beat" style="color:#dc3545"></i>
                        </span>
                        <h5>Web Development</h5>
                        <p>Crafting dynamic web solutions with precision, merging design and functionality seamlessly.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="item">
                      <span class="icon feature_box_col_four">
                          <i class="fa-solid fa-user-shield fa-beat" style="color:#dc3545"></i>
                      </span>
                      <h5>Cyber Security</h5>
                      <p>Ensuring digital safety through vigilant expertise and proactive cybersecurity measures.
                      </p>
                  </div>
              </div>
                <div class="col-lg-4 col-sm-6">
                  <div class="item">
                      <span class="icon feature_box_col_five">
                          <i class="fa-solid fa-database fa-beat" style="color:#dc3545"></i>
                      </span>
                      <h5>Data Analysis</h5>
                      <p>Unveiling patterns, guiding decisions through impactful data analysis proficiency.
                      </p>
                  </div>
              </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                  <div class="item">
                      <span class="icon feature_box_col_six">
                          <i class="fa-solid fa-store fa-beat" style="color:#dc3545"></i>
                      </span>
                      <h5>Digital Marketing</h5>
                      <p>Elevating brands with strategic digital campaigns, amplifying online presence effectively.</p>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>


    <!-- Contact Section -->
    <section id="contact">
        <div class="container mt-5">
            <h2>Contact Me</h2>
            <form id="contactForm" method="POST" action="connection.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Your Name" class="form-control rounded-pill" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Your Email" class="form-control rounded-pill" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea placeholder="Please Give Some Feedback Or Suggestion To Improve My Website..." class="form-control rounded-pill" id="message" rows="5" name="message" required></textarea>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-outline-success btn-lg rounded-pill" name="send">Send<span> <i class="fa-regular fa-paper-plane"></i></span></button>
              </div>
            </form>
        </div>
    </section>


    <!-- Footer Section -->
    <footer class="text-center py-3">
       <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 footer ">
              <div class="footer-links mb-3">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#service">Service</a>
                <a href="#contact">Contact</a>
              </div>
              <div class="social-icons">
                <a href="mailto:rb436631@gmail.com" target="_blank"><i class="fa-solid fa-envelope fa-beat-fade fa-2xl mr-2" style="color: #dc3545;"></i></a>
                <a href="https://www.linkedin.com/in/raj-kumar-behera-b2a80226b/" target="_blank"><i class="fa-brands fa-linkedin fa-beat-fade fa-2xl mr-2" style="color: #dc3545;"></i></a>
                <a href="https://github.com/Raj140620" target="_blank"><i class="fa-brands fa-github fa-beat-fade fa-2xl mr-2" style="color: #dc3545;"></i></a>
                <a href="https://www.facebook.com/rajkumar.behera.923519" target="_blank"><i class="fa-brands fa-facebook fa-beat-fade fa-2xl mr-2" style="color: #dc3545;"></i></a>
                <a href="https://www.instagram.com/rajkumarbehera14/" target="_blank"><i class="fa-brands fa-instagram fa-beat-fade fa-2xl" style="color: #dc3545;"></i></a>
              </div>

              <p class="mt-3">&copy; 2023 RKB Portfolio<br>All Rights Are Not Reserved<br>Free To Use 😊.</p>
            </div>
          </div>
        </div>
    </footer>


    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Popper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>


    <!-- Slick Slider Java Script CDN -->
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js" ></script>


    <!-- Bootstrap Script CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Own Java Script Link-->
    <script src="/JS/main.js"></script>
    
    
     <!-- IBM Chatbot Script -->
    <script>
      window.watsonAssistantChatOptions = {
        integrationID: "c05f3aea-ab69-48cf-981d-4e3fb7471315", // The ID of this integration.
        region: "au-syd", // The region your integration is hosted in.
        serviceInstanceID: "2f8d22fb-0392-4714-afe6-47e914633949", // The ID of your service instance.
        onLoad: async (instance) => { await instance.render(); }
      };
      setTimeout(function(){
        const t=document.createElement('script');
        t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
        document.head.appendChild(t);
      });
    </script>

</body>

</html>
