  <?php get_header();?>
 <head>
     <style>
     
     
     /* card css */

  /* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

/*.btn-primary {*/
/*    color: #fff;*/
/*    background-color: #007b5e;*/
/*    border-color: #007b5e;*/
/*}*/

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

/*.frontside .card .card-title,*/
/*.backside .card .card-title {*/
/*    color: #007b5e !important;*/
/*}*/

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
         .site-header {
  z-index: 10;
  font-family: 'Roboto Condensed', sans-serif;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: #FFF;
}

@media screen and (min-width: 1250px) {
  .site-header {
    -webkit-box-pack: justify; class="rounded-pill"
        -ms-flex-pack: justify;
            justify-content: space-between;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
}

.site-header .nav-logo {
  -ms-flex-item-align: start;
      align-self: flex-start;
  padding: 10px 5px 5px;
}

.site-header .nav-logo a img {
  max-width: 200px;
  height: auto;
}

@media screen and (min-width: 768px) {
  .site-header .nav-logo a img {
    max-width: 314px;
    height: auto;
  }
}

.site-header .nav-links {
  display: none;
  width: 100%;
  background-color: #DEF0FF;
}

@media screen and (min-width: 1250px) {
  .site-header .nav-links {
    display: block;
    background-color: #FFF;
  }
}

.site-header .nav-links ul {
  padding: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
}

@media screen and (min-width: 1250px) {
  .site-header .nav-links ul {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
  }
}

.site-header .nav-links ul li {
  list-style: none;
}

.site-header .nav-links ul li a {
  font-size: 18px;
  text-transform: uppercase;
  font-family: 400;
  color: #7f53ac;
  letter-spacing: 1.2px;
  padding: 10px 15px;
  text-decoration: none;
  display: block;
}

.site-header .nav-links ul li:hover {
  background-color: #efe0ff;
}

.site-header button {
  cursor: pointer;
  background: transparent;
  border: none;
  max-width: 50px;
  display: block;
  position: absolute;
  top: 10px;
  right: 10px;
}

@media screen and (min-width: 768px) {
  .site-header button {
    top: 20px;
  }
}

@media screen and (min-width: 1250px) {
  .site-header button {
    display: none;
  }
}

.nav-links.active {
  display: block;
}


  /*.custom-hr {*/
  /*  border: none;*/
  /*  height: 2px;*/
    background-color: red; /* Change this to your desired danger color */
  /*  margin: 10px 0;*/
  /*}*/
     </style>

 </head> 

<body>
    <!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 15701322;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/15701322/" rel="nofollow">Disclaimer! Name and E-mail will be recorded..Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

  <nav class="site-header">
    <div class="nav-logo">
       <img src="<?php echo get_template_directory_uri()?>/assets/img/front/kiit-removebg.png" width="120px" height="80px">
      </a>
    </div>
    <div><h4 class="text-uppercase">Project Management Consultancy</h4></div>
<button class="hamburger">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/menu.png" width="50px" height="50px">
</button>
<div class="nav-links">

      <ul>
        <li><a href="https://consultancy.kiit.ac.ke/">Home</a></li>
        <li><a class="nav-link" href="#about">About</a></li>
        <li><a class="nav-link"href="#services">Services</a></a></li>
        <li> <a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link" href="#team">Team</a></li>
        <li><a class="nav-link" href="#contact">Contact</a></li>
        <li><a class="nav-link" href="https://consultancy.kiit.ac.ke/events/">Events</a></li>
      </ul>
      <!--<hr class="custom-hr mt-5">-->
    </div>
  </nav>
            
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel "style="position: relative;  overflow: hidden;">
           <div class="carousel-indicators " style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ">
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
           </div>
           <div class="carousel-inner">
             <div class="carousel-item active">
               <img src="<?php echo get_template_directory_uri()?>/assets/img/front/construction-site.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption">
                 <h5></h5>
                                 <p></p>
                                 <p><a href="#" class="btn btn-primary mt-3">Learn More</a></p>
               </div>
             </div>
             <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/front/consulta.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption">
                 <h5>Always Dedicated</h5>
                                 <p>Delivering excellence through meticulous planning, precise execution, and unparalleled project management expertise.</p>
                                 <p><a href="#" class="btn btn-primary mt-3">Learn More</a></p>
               </div>
             </div>
             <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/front/IMG-20230620-WA0057.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption">
                 <h5>True Construction</h5>
                                 <p>"Empowering your projects with our strategic guidance and exceptional leadership for exceptional outcomes.</p>
                                 <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
               </div>
             </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
         </div>
   
         <!-- about section starts -->
         <section id="about" class="about section-padding">
             <div class="container mb-5">
                 <div class="mt-5">
                    <div class="mb-5 mt-5">
                    <h2  class="text-center mt-5" >OUR PROJECT  MANAGEMENT OFFICE (PMO)<span class="text-danger"> CONSULTANCY  </span></h2>
                    </div>
                 </div>

                 <div class="row">
                     <div class="col-lg-4 col-md-12 col-12 mt-5">
                         <div class="about-img mt-5">
                             <img  src="<?php echo get_template_directory_uri()?>/assets/img/front/about.jpg" alt="" class="img-fluid">
                         </div>
                     </div>
                     <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                         <div class="about-text">

                               <p>We address a set of specific problems on Program or Project performance gaps and fix it on behalf of client. Our consultancy services aim to optimize resource management and facilitate the implementation of proven project planning concepts to help our Client get the outcomes they desire and maximize profits in the long run. We also address other widespread project problems, which include a high rate of projects that fail to deliver the expected business value. This may be amongst other things due to a suboptimal project selection process or poor project execution. This can also be the result of longer-than-average project completion times, which ties up key resources over elongated periods of time and delays the time to market of new products and services. With our team of professional, we achieve this by auditing the processes and ways of working in place and optimizing when necessary by introducing more structured approaches and tools that are more effective with best practices. We also identify issues, minor or major, and resolve them in a flash.</p>
                               <a href="#" class="btn btn-primary mt-4">Learn More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!-- about section Ends -->
         <!-- services section Starts -->
         <!-- <section class="services section-padding" id="services">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="section-header text-center pb-5">
                             <h2>Our Services</h2>
                             <p>Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit. Non, quo.</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                   <div class="col-12 col-md-12 col-lg-4">
                       <div class="card text-white text-center bg-dark pb-2">
                           <div class="card-body">
                               <i class="bi bi-laptop"></i>
                               <h3 class="card-title">Best Quality</h3>
                               <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                               <button class="btn bg-warning text-dark">Read More</button>
                           </div>
                       </div>
                   </div>
                     <div class="col-12 col-md-12 col-lg-4">
                         <div class="card text-white text-center bg-dark pb-2">
                             <div class="card-body">
                               <i class="bi bi-journal"></i>
                                 <h3 class="card-title">Sustainability</h3>
                                 <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                                 <button class="btn bg-warning text-dark">Read More</button>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 col-md-12 col-lg-4">
                         <div class="card text-white text-center bg-dark pb-2">
                             <div class="card-body">
                               <i class="bi bi-intersect"></i>
                                 <h3 class="card-title">Integrity</h3>
                                 <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p>
                                 <button class="btn bg-warning text-dark">Read More</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section> -->
         <!-- services section Ends -->
         <!-- service section starts  -->
        <!-- <section class="services section-padding" id="services">-->
        <!--  <div class="container">-->
        <!--  <div class="row">-->
        <!--             <div class="col-md-12 mt-5">-->
        <!--                 <div class="section-header text-center pb-5">-->
        <!--                     <h2>Our Services</h2>-->
        <!--                     <p>Experienced team. Successful project management. <br> Effective change implementation.</p>-->
        <!--                 </div>-->
        <!--             </div>-->
        <!--            </div>-->
        <!--    <div class="row ">-->
        <!--           <div class="col-sm-6 mt-5 ">-->
        <!--               <p>Our consultancy services encompass a broad range of project-related offerings. These include project training and support, program scheduling, milestones, and control, program and project management, development of project management software, CCtv Installation, project control, risk management, monitoring and evaluation, reporting, project portfolio management, quality management, and administrative support. With our expertise in these areas, we provide comprehensive assistance and guidance to clients in effectively managing their projects and ensuring their successful execution.</p>-->
        <!--           </div>-->
        <!--           <div class="col-sm-6 col-sm-6 d-flex justify-content-center align-items-center md-5">-->
        <!--            <img src="<?php echo get_template_directory_uri()?>/assets/img/front/cctv-camera.jpg">-->
        <!--       </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--</section>-->
        
        <!--service-->
        <div>
<div class="container mt-5 ">
    <h2 class="mt-5 mb-5 text-center">
    OUR  <span class="text-danger"> SERVICES  </span>
    </h2>
    <p class="mt-5 text-center">Our consultancy services encompass a broad range of project-related offerings.</p>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/training.jpg" alt="">
                <p class="text-center">Training and Support</p>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/pmo.jfif" alt="">
                <p class="text-center">Project Management</p>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/software.jpg" alt="">
                <p class="text-center">Project Management Softwares</p>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/6.webp" alt="">
                <p class="text-center">CCTV Installation</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/project-control.jfif" alt="">
                <p class="text-center">Projects Control</p>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/Risk-Management.png" alt="">
                <p class="text-center">Risk Management</p>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/monitoring.jfif" alt="">
                <p class="text-center">Monitoring and Evaluation</p>
            </div>
            <div class="col-lg-3 col-sm-6 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/Objectives.jpg" alt="">
                <p class="text-center">Portfolio Management</p>
            </div>
        </div>
    </div>
</div>

        <!-- service section ends   -->
<div class="container">
  <h2 class="text-center text-uppercase">Upcoming <span class="text-danger"> Events</span></h2>
  <p class="mt-5 text-center">Elevate your skills with our most in-demand training programmes</p>
  <div class="row mt-5">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">The roles of Project Management skills in 21st century economic growth.</h5>
          <p class="card-text">7th July 2023</p>
          <p class="card-text">2 Hours (5:00 PM - 7:00 PM)</p>
          <p class="card-text">Virtual</p>
          <p class="card-text">KES 1500 (Certificate to be provided)</p>
          <a href="https://consultancy.kiit.ac.ke/form/" class="btn btn-primary">Apply</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">The Roles of Monitoring Evaluation Accountability and Learning (MEAL) as a Strategy for project success.</h5>
          <p class="card-text">14th July 2023</p>
          <p class="card-text">2 Hours (5:00 PM - 7:00 PM)</p>
          <p class="card-text">Virtual</p>
          <p class="card-text">KES 1500 (Certificate to be provided)</p>
          <a href="https://consultancy.kiit.ac.ke/form/" class="btn btn-primary">Apply</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Human Resource Management strategic success in Medium-sized and big Projects</h5>
          <p class="card-text">11th August 2023</p>
          <p class="card-text">2 Hours (5:00 PM - 7:00 PM)</p>
          <p class="card-text">Virtual</p>
          <p class="card-text">KES 1500 (Certificate to be provided)</p>
          <a href="https://consultancy.kiit.ac.ke/form/" class="btn btn-primary">Apply</a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row mt-3">
  <div class="container">
    <i class="float-right bi bi-arrow-down-square bg-primary"></i>
    <div class="float-right spinner-grow text-primary"></div>
    <a class="float-right text-primary" href="https://consultancy.kiit.ac.ke/events/">Click here to view more Upcoming Trainings</a>
  </div>
</div>



  <!-- portfolio strats -->
  <div class="container mt-5">
       <div class="section-header text-center pb-5">
        <h2 class="text-uppercase" >Our <span class="text-danger">Projects</span> </h2>
            <p Class=mt-5>Diverse portfolio. Successful outcomes. Client satisfaction. <br> Exceeding project expectations.</p>
        </div>
      
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
     <img  src="<?php echo get_template_directory_uri()?>/assets/img/front/DSC_9668.jpg" class="img-fluid" alt="">
      <div class="card-body">
         <h3 class="card-title">Monitoring & Evaluation Accountability and Learning</h3>
        <p class="lead">Monitoring & Evaluation Accountability and Learning
         The Kenya Institute of information and Technology (KIIT) – Project Management Consultancy offers specialized support in monitoring and evaluation (M&E). M&E is crucial for tracking progress towards goals in international development. Previously, M&E consultants were considered optional due to budget constraints, but now organizations assign third-party consultants to ensure project success. KIIT brings years of M&E expertise in Kenya and Africa.</p>
        <button class="btn bg-primary text-dark">Learn More</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
       <img src="<?php echo get_template_directory_uri()?>/assets/img/front/christina-wocintechchat-com-faEfWCdOKIg-unsplash.jpg" class="img-fluid" alt="">
      <div class="card-body">
         <h3 class="card-title">Fundraising/Resource Mobilization and Donor Relations</h3>
         <p class="lead">KIIT's Project Management Consultancy partners with the Grants Acquisition & Management Manager to assess resource mobilization strategies. This includes reviewing Finance Plan and Budget, establishing Finance Committees, implementing Fundraising Events & House Parties, and utilizing Online Fundraising. Our consultants specialize in setting Fundraising Goals, building Teams, and optimizing fundraising efforts.</p>
         <button class="btn bg-primary text-dark">learn More</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/front/jjj.jpg" class="img-fluid" alt="">
      <div class="card-body">
       <h3 class="card-title">Training and Capacity Development: </h3>
        <p class="lead">KIIT- Project Management Consultancy provides tailor-made in-service courses, lasting a few days to several weeks. These are aimed at improving knowledge, skills and competence those results in better performance and high productivity of professionals.  The courses offered are accredited by National Industrial Training Authority (NITA and TVETA) delivered by qualified professional. The trainings take the form of seminars, workshops and symposia either in-site or at the client institution/organization.</p>
        <button class="btn bg-primary text-dark">Learn More</button>
      </div>
    </div>
  </div>
</div>
</div>
  <!--<section id="portfolio" class="portfolio section-padding">-->
  <!--       <div class="container">-->
  <!--           <div class="row">-->
  <!--               <div class="col-md-12">-->
  <!--                   <div class="section-header text-center pb-5">-->
  <!--                       <h2>Our Projects</h2>-->
  <!--                       <p>Diverse portfolio. Successful outcomes. Client satisfaction. <br> Exceeding project expectations.</p>-->
  <!--                   </div>-->
  <!--               </div>-->
  <!--           </div>-->
  <!--           <div class="card-deck">-->
  <!--           <div class="row">-->
  <!--               <div class="col-12 col-md-12 col-lg-4">-->
  <!--                   <div class="card text-light text-center bg-white pb-2">-->
  <!--                       <div class="card-body text-dark  h-100">-->
  <!--                         <div class="img-area mb-4">-->
  <!--                             <img  src="<?php echo get_template_directory_uri()?>/assets/img/front/DSC_9668.jpg" class="img-fluid" alt="">-->
  <!--                         </div>-->
  <!--                           <h3 class="card-title">Monitoring & Evaluation Accountability and Learning</h3>-->
  <!--                           <p class="lead">Monitoring & Evaluation Accountability and Learning-->
  <!--                            The Kenya Institute of information and Technology (KIIT) – Project Management Consultancy offers specialized support in monitoring and evaluation (M&E). M&E is crucial for tracking progress towards goals in international development. Previously, M&E consultants were considered optional due to budget constraints, but now organizations assign third-party consultants to ensure project success. KIIT brings years of M&E expertise in Kenya and Africa.</p>-->
  <!--                           <button class="btn bg-primary text-dark">Learn More</button>-->
  <!--                       </div>-->
  <!--                   </div>-->
  <!--               </div>-->
  <!--               <div class="col-12 col-md-12 col-lg-4">-->
  <!--                   <div class="card text-light text-center bg-white pb-2">-->
  <!--                       <div class="card-body text-dark">-->
  <!--                         <div class="img-area mb-4">-->
  <!--                             <img src="<?php echo get_template_directory_uri()?>/assets/img/front/christina-wocintechchat-com-faEfWCdOKIg-unsplash.jpg" class="img-fluid" alt="">-->
  <!--                         </div>-->
  <!--                           <h3 class="card-title">Fundraising/Resource Mobilization and Donor Relations</h3>-->
  <!--                           <p class="lead">KIIT's Project Management Consultancy partners with the Grants Acquisition & Management Manager to assess resource mobilization strategies. This includes reviewing Finance Plan and Budget, establishing Finance Committees, implementing Fundraising Events & House Parties, and utilizing Online Fundraising. Our consultants specialize in setting Fundraising Goals, building Teams, and optimizing fundraising efforts.</p>-->
  <!--                           <button class="btn bg-primary text-dark">learn More</button>-->
  <!--                       </div>-->
  <!--                   </div>-->
  <!--               </div>-->
  <!--               <div class="col-12 col-md-12 col-lg-4">-->
  <!--                   <div class="card text-light text-center bg-white pb-2">-->
  <!--                       <div class="card-body text-dark">-->
  <!--                         <div class="img-area mb-4">-->
  <!--                             <img src="<?php echo get_template_directory_uri()?>/assets/img/front/jjj.jpg" class="img-fluid" alt="">-->
  <!--                         </div>-->
  <!--                           <h3 class="card-title">Training and Capacity Development: </h3>-->
  <!--                           <p class="lead">KIIT- Project Management Consultancy provides tailor-made in-service courses, lasting a few days to several weeks. These are aimed at improving knowledge, skills and competence those results in better performance and high productivity of professionals.  The courses offered are accredited by National Industrial Training Authority (NITA and TVETA) delivered by qualified professional. The trainings take the form of seminars, workshops and symposia either in-site or at the client institution/organization.</p>-->
  <!--                           <button class="btn bg-primary text-dark">Learn More</button>-->
  <!--                       </div>-->
  <!--                   </div>-->
  <!--               </div>-->
  <!--           </div>-->
  <!--       </div>-->
  <!--       </div>-->
  <!--     </section>-->
       <!-- portfolio ends -->
       
<section id="team" class="pb-5">
  <div class="container">
    <h2 class="text-center mt-5 mb-5 text-uppercase">Our <span class="text-danger">Team</span></h2>
    <p class="text-center mb-5">Skilled professionals. Collaborative approach. Strong teamwork.<br> Exceptional results. Client-focused mentality..</p>
    <div class="row ">
      <!-- Team member -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <div class="img-container">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/front/job.jpg" alt="" class="img-fluid rounded-circle">
                  </div>
                  <h4 class="card-title">Job Magondu</h4>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="backside">
              <div class="card">
                <div class="card-body text-center mt-4">
                  <h4 class="card-title">Team Leader</h4>
                  <p class="card-text">Experienced Project Management Expert with vast knowledge in various sectors, including ICT, NGO's, and Real Estate. He holds a Master's degree in Project Planning and Management from the University of Nairobi and is certified in Cisco networking.</p>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-skype"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-google"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Repeat the same structure for other team members -->
      <!-- Team member -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                   <p><img src="<?php echo get_template_directory_uri()?>/assets/img/front/nelly.jpg" alt="" class="img-fluid rounded-circle" height="200px" width="200px"></p>
                    <h4 class="card-title">Nelly Koigu</h4>
                    <p class="card-text"></p>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="backside">
              <div class="card">
                <div class="card-body text-center mt-4">
                  <h4 class="card-title">Administrator</h4>
                  <p class="card-text">Experienced administrator with a Psychology background, brings a decade of expertise in education and resource management. She holds a Bachelor's degree in Psychology and is pursuing an MBA in Strategic Planning.</p>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-skype"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-google"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                  <p><img src="<?php echo get_template_directory_uri()?>/assets/img/front/njeru.jpg" alt="" class="img-fluid rounded-circle" height="200px" width="200px">
                  <h4 class="card-title">Job Njeru</h4>
                  <p class="card-text"></p>
                  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="backside">
              <div class="card">
                <div class="card-body text-center mt-4">
                  <h4 class="card-title">Project Manager</h4>
                  <p class="card-text">Job is an accomplished project management professional with 18+ years of experience in private sector and humanitarian development, empowering clients and coordinating with partners.</p>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-skype"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-google"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
      <!-- Team member -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
          <div class="mainflip">
            <div class="frontside">
              <div class="card">
                <div class="card-body text-center">
                <p> <img src="<?php echo get_template_directory_uri()?>/assets/img/front/James3.png" alt="" class="img-fluid rounded-circle" height="150px" width="150px">
                <h4 class="card-title">James Muthui</h4>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="backside">
              <div class="card">
                <div class="card-body text-center mt-4">
                  <h4 class="card-title">Technical Manager</h4>
                  <p class="card-text">Highly skilled and experienced IT professional. Holder of Bachelor of Science In Information Technology, Certified Cisco Networking, Linux Professional Institute and Cisco DevNet Framework holder. </p>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-skype"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-icon text-xs-center" target="_blank" href="#">
                        <i class="fa fa-google"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Team member -->
    </div>
  </div>
</section>

       
         <!-- team starts -->
<!--<div class="container mt-5" >-->
<!--    <h2 class="text-center mt-5 mb-5 text-uppercase">Our <span class="text-danger">Team</span></h2>-->
<!--    <p class="text-center">Skilled professionals. Collaborative approach. Strong teamwork.<br> Exceptional results. Client-focused mentality..</p>-->
<!--         <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">-->
<!--  <div class="col">-->
<!--    <div class="card h-100">-->
<!--      <img src="<?php echo get_template_directory_uri()?>/assets/img/front/job.jpg" alt="" class="img-fluid rounded-circle" height="200px" width="200px">-->
<!--      <div class="card-body">-->
<!--        <h3 class="card-title py-2">Job Magondu</h3>-->
<!--       <p class="card-text">Job Magondu is an experienced Project Management Expert with vast knowledge in various sectors, including ICT, NGO's, and Real Estate. He holds a Master's degree in Project Planning and Management from the University of Nairobi and is certified in Cisco networking.</p>-->
<!--        <p class="socials">-->
<!--         <i class="bi bi-twitter text-dark mx-1"></i>-->
<!--         <i class="bi bi-facebook text-dark mx-1"></i>-->
<!--         <i class="bi bi-linkedin text-dark mx-1"></i>-->
<!--         <i class="bi bi-instagram text-dark mx-1"></i>-->
<!--        </p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col">-->
<!--    <div class="card h-100">-->
<!--        <img src="<?php echo get_template_directory_uri()?>/assets/img/front/nelly.jpg" alt="" class="img-fluid rounded-circle" height="200px" width="200px">-->
<!--      <div class="card-body">-->
<!--         <h3 class="card-title py-2">Nelly Koigu</h3>-->
<!--         <p class="card-text">Nelly Koigu, an experienced administrator with a Psychology background, brings a decade of expertise in education and resource management. She holds a Bachelor's degree in Psychology and is pursuing an MBA in Strategic Planning. </p>-->
<!--         <p class="socials">-->
<!--         <i class="bi bi-twitter text-dark mx-1"></i>-->
<!--         <i class="bi bi-facebook text-dark mx-1"></i>-->
<!--         <i class="bi bi-linkedin text-dark mx-1"></i>-->
<!--         <i class="bi bi-instagram text-dark mx-1"></i>-->
<!--         </p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col">-->
<!--    <div class="card h-100">-->
<!--         <img src="<?php echo get_template_directory_uri()?>/assets/img/front/njeru.jpg" alt="" class="img-fluid rounded-circle" height="200px" width="200px">-->
<!--      <div class="card-body">-->
<!--        <h3 class="card-title py-2">Job Njeru</h3>-->
<!--         <p class="card-text">Job is an accomplished project management professional with 18+ years of experience in private sector and humanitarian development, empowering clients and coordinating with partners.</p>-->
<!--         <p class="socials">-->
<!--             <i class="bi bi-twitter text-dark mx-1"></i>-->
<!--         <i class="bi bi-facebook text-dark mx-1"></i>-->
<!--         <i class="bi bi-linkedin text-dark mx-1"></i>-->
<!--         <i class="bi bi-instagram text-dark mx-1"></i>-->
<!--         </p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--  <div class="col">-->
<!--    <div class="card h-100">-->
<!--      <img src="<?php echo get_template_directory_uri()?>/assets/img/front/James3.png" alt="" class="img-fluid rounded-circle" height="150px" width="150px">-->
<!--      <div class="card-body">-->
<!--        <h3 class="card-title py-2">James Muthui</h3>-->
<!--         <p class="card-text">James Muthui:Highly skilled and experienced IT professional with a strong background in various areas of information technology.  </p>-->
<!--         <p class="socials">-->
<!--             <i class="bi bi-twitter text-dark mx-1"></i>-->
<!--         <i class="bi bi-facebook text-dark mx-1"></i>-->
<!--         <i class="bi bi-linkedin text-dark mx-1"></i>-->
<!--         <i class="bi bi-instagram text-dark mx-1"></i>-->
<!--         </p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--</div>-->
         <!--<section class="team section-padding" id="team">-->
         <!--    <div class="container">-->
         <!--      <div class="row">-->
         <!--          <div class="col-md-12">-->
         <!--              <div class="section-header text-center pb-5">-->
         <!--                  <h2>Our Team</h2>-->
         <!--                  <p>Skilled professionals. Collaborative approach. Strong teamwork.<br> Exceptional results. Client-focused mentality..</p>-->
         <!--              </div>-->
         <!--          </div>-->
         <!--      </div>-->
         <!--      <div class="row">-->
         <!--          <div class="col-12 col-md-6 col-lg-3">-->
         <!--              <div class="card text-center">-->
         <!--                  <div class="card-body">-->
         <!--                      <img src="<?php echo get_template_directory_uri()?>/assets/img/front/job.jpg" alt="" class="img-fluid rounded-circle">-->
         <!--                  <h3 class="card-title py-2">Job Magondu</h3>-->
         <!--                  <p class="card-text">Job Magondu is an experienced Project Management Expert with vast knowledge in various sectors, including ICT, NGO's, and Real Estate. He holds a Master's degree in Project Planning and Management from the University of Nairobi and is certified in Cisco networking.</p>-->
                           
   
         <!--                  <p class="socials">-->
         <!--                      <i class="bi bi-twitter text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-facebook text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-linkedin text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-instagram text-dark mx-1"></i>-->
         <!--                  </p>-->
         <!--                  </div>-->
         <!--              </div>-->
         <!--          </div>-->
         <!--          <div class="col-12 col-md-6 col-lg-3">-->
         <!--              <div class="card text-center">-->
         <!--                  <div class="card-body">-->
         <!--                  <img src="<?php echo get_template_directory_uri()?>/assets/img/front/nelly.jpg" alt="" class="img-fluid rounded-circle">-->
         <!--                  <h3 class="card-title py-2">Nelly Koigu</h3>-->
         <!--                  <p class="card-text">Nelly Koigu, an experienced administrator with a Psychology background, brings a decade of expertise in education and resource management. She holds a Bachelor's degree in Psychology and is pursuing an MBA in Strategic Planning.</p>-->
         <!--                  <p class="socials">-->
         <!--                      <i class="bi bi-twitter text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-facebook text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-linkedin text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-instagram text-dark mx-1"></i>-->
         <!--                  </p>-->
         <!--                  </div>-->
         <!--              </div>-->
         <!--          </div>-->
         <!--          <div class="col-12 col-md-6 col-lg-3">-->
         <!--              <div class="card text-center">-->
         <!--                  <div class="card-body">-->
         <!--                      <img src="<?php echo get_template_directory_uri()?>/assets/img/front/njeru.jpg" alt="" class="img-fluid rounded-circle">-->
         <!--                  <h3 class="card-title py-2">Job Njeru</h3>-->
         <!--                  <p class="card-text">Job is an accomplished project management professional with 18+ years of experience in private sector and humanitarian development, empowering clients and coordinating with partners.</p>-->
         <!--                  <p class="socials">-->
         <!--                      <i class="bi bi-twitter text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-facebook text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-linkedin text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-instagram text-dark mx-1"></i>-->
         <!--                  </p>-->
         <!--                  </div>-->
         <!--              </div>-->
         <!--          </div>-->
         <!--          <div class="col-12 col-md-6 col-lg-3">-->
         <!--              <div class="card text-center">-->
         <!--                  <div class="card-body">-->
         <!--                      <img src="<?php echo get_template_directory_uri()?>/assets/img/front/cris.jpg" alt="" class="img-fluid rounded-circle">-->
         <!--                  <h3 class="card-title py-2">Crispin Manda</h3>-->
         <!--                  <p class="card-text">Crispin Manda: Accomplished Senior Web/Software developer with a Bachelors in Computer Science from the University of Nairobi. Skilled in full-stack development, agile project management, and UI/UX design. Committed to delivering high-quality, user-centric solutions that drive business success.</p>-->
         <!--                  <p class="socials">-->
         <!--                      <i class="bi bi-twitter text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-facebook text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-linkedin text-dark mx-1"></i>-->
         <!--                  <i class="bi bi-instagram text-dark mx-1"></i>-->
         <!--                  </p>-->
         <!--                  </div>-->
         <!--              </div>-->
         <!--          </div>-->
         <!--      </div>-->
         <!--    </div>-->
         <!--</section>-->
         <!-- team ends -->
         <!-- Contact starts -->
         
         <section id="scrollspyContact" class="py-5 py-xl-8 py-xxl-16">
  <div class="container">

    <div class="text-center">
      <h2 class=" mt-5 text-uppercase">Contact <span class= "text-danger"> Us</span></h2>
      <p class= "mt-5 mb-5 ">Don't hesitate to reach out to us today and take the first step towards a successful project <br>- we're always happy to hear from you and discuss how we can help.</p>
    </div>

  <!--Section: Contact v.2-->
<section class="mb-4">
  <!--Section description-->
  <!--<p class="text-center w-responsive mx-auto mb-5 mt-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within-->
  <!--    a matter of hours to help you.</p>-->

  <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control">
                          <label for="name" class="">Your name</label>
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control">
                          <label for="email" class="">Your email</label>
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                          <input type="text" id="subject" name="subject" class="form-control">
                          <label for="subject" class="">Subject</label>
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                          <label for="message">Your message</label>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-center text-md-left">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="bi bi-map-marker-alt fa-2x"></i>
                  <p>Nyeri, Batian Building ,KENYA</p>
              </li>

              <li><i class="bi bi-telephone mt-4 fa-2x"></i>
                  <p>+254720035181</p>
              </li>

              <li><i class="bi bi-envelope mt-4 fa-2x"></i>
                  <p>consultancykiit.ac.ke </i> </p>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.2-->

    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.getElementsByClassName("hamburger")[0];
  const mobileNavs = document.getElementsByClassName("nav-links")[0];

  hamburger.addEventListener("click", () => {
    mobileNavs.classList.toggle("active");
  });
});

</script>


         <!-- contact ends -->
         <!-- footer starts -->
         <!-- <footer class="bg-dark p-2 text-center">
             <div class="container">
                 <p class="text-white">All Right Reserved By Crispin Manda</p>
             </div>
         </footer> -->
</body>

   
<?php get_footer();