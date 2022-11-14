<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valeria's Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/197b6bdd15.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="header">
    <div class="container">
      <nav id="navbar">
        <h1>Anami</h1>
        <ul id="sidemenu">
          <li><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
          <i class="fa-solid fa-xmark" onClick="closemenu()"></i>
        </ul>
        <i class="fa-solid fa-bars" onClick="openmenu()"></i>
      </nav>
      <div class="header-text">
        <p>Hello,</p>
        <h1>I'm <span>Valeria Muhembele,</span><br>a Software Engineer.</h1>
      </div>
    </div>
  </div>

  <div id="about">
    <div class="container">
      <div class="row">
        <div class="col-1">
          <img src="images/worjval.jpg">
        </div>
        <div class="col-2">
          <h1 class="sub-title">About Me</h1>
          <p>I’m an experienced Software Developer who constantly seeks out innovative solutions to everyday problems. To achieve high-end customer experience, I create beautiful and performant products with delightful user experiences.</p>
          <div class="tab-titles">
            <p class="tab-links active-link" onClick="opentab('skills')">Skills</p>
            <p class="tab-links" onClick="opentab('experience')">Experience</p>
            <p class="tab-links" onClick="opentab('education')">Education</p>
          </div>
          <div class="tab-contents active-tab" id="skills">
            <ul>
              <li><span>Web Design</span><br>I interactive web applications.</li>
            </ul>
          </div>
           <div class="tab-contents" id="experience">
            <ul>
              <li><span>April 2022-current</span><br>Attachee Lakehub</li>
              
            </ul>
          </div>
          <div class="tab-contents" id="education">
            <ul>
              <li><span>2018-2023</span><br>Kisii University</li>
              <li><span>2014-2017</span><br>Lwanda Secondary School</li>
              <li><span>2004-2013</span><br>lugala Primary School</li>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services">
    <div class="container">
      <h1 class="sub-title">My Services</h1>
      <div class="service-list">
        
        <div>
          <i class="fa-solid fa-code"></i>
          <h3>Web Designing</h3>
          <p>I design responsive websites that are user-friendly and meet requirements.</p>
          <a href="#">Hire Me</a>
        </div>
        
      </div>
    </div>
  </div>

  <div id="portfolio">
    <div class="container">
      <h1 class="sub-title">My Projects</h1>
      <div class="">
        <div class="">
          <div class="">
            <h3>Mover website</h3>
            <a href="https://moverr-app.herokuapp.com/" class="demo">demo</a>
            <p>Valeria  designs responsive websites</p>
          </div>
        </div>
        </div>
    </div>
  </div>

  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="left-col">
          <h1 class="sub-title">Contact Me</h1>
          <p>muhembelev@gmail.com@gmail.com</p>
          <p>+2567979366562</p>
          <div class="social-icons">
            <a href="#"><i class="fa-brands fa-square-linkedin"></i></a>
            <a href="https://www.linkedin.com/in/valeria-muhembele-83726222a"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-telegram"></i></a>
            <a href="#"><i class="fa-brands fa-square-whatsapp"></i></a>
          </div>
          <div>
            <a href="images/valeria-cv.pdf" class="btn">Download CV</a>
          </div>
        </div>
        <div class="right-col">
          <h3>Email Me and we will talk</h3>
          
        </div>
      </div>
    </div>
    
    <div class="copyright">
      <p>This portfolio was designed by valeria. Copyright © <script>document.write(new Date().getUTCFullYear());</script></p>
    </div>

  </div>

  <script>
    var tablinks=document.getElementsByClassName("tab-links");
    var tabcontents=document.getElementsByClassName("tab-contents");

    function opentab(tabname){
      for(tablink of tablinks){
        tablink.classList.remove("active-link");
      }
      for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
      }

      event.currentTarget.classList.add("active-link");
      document.getElementById(tabname).classList.add("active-tab");
    }

    
  </script>

  <script>
    var navbar=document.getElementById("sidemenu");

    function openmenu(){
      navbar.style.right= "0";
    }
    function closemenu(){
      navbar.style.right= "-200px";
    }
  </script>
</body>
</html>